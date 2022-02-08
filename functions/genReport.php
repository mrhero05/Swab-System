<?php
    require '../fpdf.php';
    session_start();
    date_default_timezone_set("Asia/Hong_Kong");
    class mySwabreport extends FPDF{
        function header(){
            $this->Image('../image/trylang.png',10,8,-500);
            $this->SetFont('Arial','B',22);
            $this->Cell(30,10,'',0,0,'C');
            $this->Cell(150,15,'PHILIPPINE RED CROSS',0,0,'L');
            $this->Ln('13');
            $this->Cell(30,10,'',0,0,'C');
            $this->Cell(150,5,'MOLECULAR LABORATORY',0,0,'L');
            $this->Ln();
            $this->Ln('10');
            $this->SetFont('Arial','B',18);
            $this->Cell(195,5,'COVID-19 RT-PCR TEST REPORT & CERTIFICATION',0,0,'C');
        }
        function basicInfo(){
            include 'db_connection.php';
            $querySelect = 'SELECT * FROM `tbl_userinfo` where `useri_id`= "'.$_SESSION['userAccountID'].'"';
            $sqlSelect = mysqli_query($connection,$querySelect);
            
            if(mysqli_num_rows($sqlSelect) > 0) {
                $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);  
                    foreach($rowSelect as $eachSelect): 
                    $this->Ln('20');
                    $this->SetFont('Arial','',11);
                    $this->Cell(30,8,'Name:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(30,8,$eachSelect['useri_fname'].' '.$eachSelect['useri_mname'][0].'. '.$eachSelect['useri_lname'],0,0,'L');

                    $this->Ln('10');
                    $this->SetFont('Arial','',11);
                    $this->Cell(25,8,'Birthday:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,date_format(date_create($eachSelect['useri_birthday']),"m/d/Y"),0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(15,8,'Age:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(30,8,$eachSelect['useri_age'],0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(35,8,'Nationality:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(30,8,'PHILIPPINES',0,0,'L');
                    
                    $this->Ln('5');
                    $this->SetFont('Arial','',11);
                    $this->Cell(25,8,'Civil Status:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,'SINGLE',0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(20,8,'Gender:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,$eachSelect['useri_sex'],0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(35,8,'Passport/ID No:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(30,8,'000',0,0,'L');

                    $this->Ln('5');
                    $this->SetFont('Arial','',11);
                    $this->Cell(20,8,'Address:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,$eachSelect['useri_address'],0,0,'L');

                    $this->Ln('15');
                    $this->SetFont('Arial','',11);
                    $this->Cell(25,8,'Barangay:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(70,8,$eachSelect['useri_bgry'],0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(15,8,'CITY:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(30,8,$eachSelect['useri_province'],0,0,'L');
                    $this->SetFont('Arial','',11);
                    
                    $this->Ln('5');
                    $this->SetFont('Arial','',11);
                    $this->Cell(25,8,'Province:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(70,8,$eachSelect['useri_region'].', THIRD DISTRICT',0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(20,8,'Region:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,$eachSelect['useri_region'],0,0,'L');
                    $this->SetFont('Arial','',11);

                    $this->Ln('5');
                    $this->SetFont('Arial','',11);
                    $this->Cell(15,8,'Email:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(90,8,$eachSelect['useri_email'],0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(20,8,'Phone:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(25,8,$eachSelect['useri_contact'],0,0,'L');
                    $this->SetFont('Arial','',11);
                endforeach; 
            }
            
        }
        function resultInfo(){
            include 'db_connection.php';
            $querySelect = 'SELECT * FROM `tbl_userinfo` where `useri_id`= "'.$_SESSION['userAccountID'].'"';
            $sqlSelect = mysqli_query($connection,$querySelect);
            
            if(mysqli_num_rows($sqlSelect) > 0) {
                $rowSelect = mysqli_fetch_all($sqlSelect,MYSQLI_ASSOC);  
                    foreach($rowSelect as $eachSelect):
                    $this->Ln('10');
                    $this->SetFont('Arial','',11);
                    $this->Cell(40,8,'Result:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    if ($eachSelect['useri_result'] == 'Negative'){
                        $this->Cell(150,8,'SARS-Cov-2 (causative agent of COVID-19) viral RNA NOT DETECTED',0,0,'L');
                    }else{
                        $this->Cell(150,8,'SARS-Cov-2 (causative agent of COVID-19) viral RNA DETECTED',0,0,'L');
                    }
                    $this->Ln('10');
                    $this->SetFont('Arial','',11);
                    $this->Cell(40,8,'Interpretation:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    if ($eachSelect['useri_result'] == 'Negative'){
                        $this->Cell(150,8,'NEGATIVE for SARS-CoV-2 (causative agent of COVID-19)',0,0,'L');
                    }else{
                        $this->Cell(150,8,'POSITIVE for SARS-CoV-2 (causative agent of COVID-19)',0,0,'L');
                    }
            

                    $this->Ln('10');
                    $this->SetFont('Arial','',11);
                    $this->Cell(40,8,'Remarks:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(150,8,'',0,0,'L');

                    $this->Ln('10');
                    $this->SetFont('Arial','',11);
                    $this->Cell(40,8,'Specimen:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(150,8,'NPS-OPS',0,0,'L');
                    $this->Ln('5');
                    $this->SetFont('Arial','',11);
                    $this->Cell(40,8,'Date Collected:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(60,8,date("m/d/Y h:i:s"),0,0,'L');
                    $this->SetFont('Arial','',11);
                    $this->Cell(30,8,'Result Date:',0,0,'L');
                    $this->SetFont('Arial','B',11);
                    $this->Cell(60,8,date("m/d/Y h:i:s"),0,0,'L');

                endforeach; 
            }
        }
        function methInfo(){
            $this->Ln('10');
            $this->SetFont('Arial','B',11);
            $this->Cell(26,5,'Methodology:',0,0,'L');
            $this->SetFont('Arial','',11);
            $this->MultiCell(170,5,"The is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged", 0);
        }
        function litInfo(){
            $this->Ln('5');
            $this->SetFont('Arial','B',11);
            $this->Cell(26,5,'Limitations:',0,0,'L');
            $this->SetFont('Arial','',11);
            $this->MultiCell(170,5,"The is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged", 0);
        }
        function noteInfo(){
            $this->Ln('5');
            $this->SetFont('Arial','B',11);
            $this->Cell(26,5,'Note:',0,0,'L');
            $this->SetFont('Arial','',11);
            $this->MultiCell(170,5,"The is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged", 0);
        }
        function medicalInfo(){
            $this->Ln('5');
            $this->SetFont('Arial','B',14);
            $this->Cell(120,8,'Test Performed by:',0,0,'L');
            $this->Cell(40,8,'Verified by:',0,0,'L');

            
            $this->Ln('30');
            $this->Image('../image/signsam.png',10,245,-1000);
            $this->SetFont('Arial','B',9);
            $this->Cell(50,8,'SAMPLE NAME, RMT:',0,0,'L');

            $this->Image('../image/signsam.png',60,245,-1000);
            $this->SetFont('Arial','B',9);
            $this->Cell(70,8,'SAMPLE NAME, RMT:',0,0,'L');

            $this->Image('../image/signsam.png',130,245,-1000);
            $this->SetFont('Arial','B',9);
            $this->Cell(60,8,'SAMPLE NAME, RMT:',0,0,'L');

            $this->Ln('4');
            $this->SetFont('Arial','',8);
            $this->Cell(50,8,'Medical Technologist, RMT:',0,0,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(70,8,'Laboratory Supervisor, RMT:',0,0,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(60,8,'Medical Technologist, RMT:',0,0,'L');

            $this->Ln('4');
            $this->SetFont('Arial','',8);
            $this->Cell(50,8,'PCR ID NO.99501, RMT:',0,0,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(70,8,'PCR ID NO.99501, RMT:',0,0,'L');

            $this->SetFont('Arial','',8);
            $this->Cell(60,8,'PCR ID NO.99501, RMT:',0,0,'L');

            $this->Ln('10');
            $this->SetFont('Arial','B',13);
            $this->Cell(110,8,'Noted by:',0,0,'L');
            $this->Cell(45,8,'Lab Number:',0,0,'L');
            $this->SetFont('Arial','',13);
            $this->Cell(40,8,'CRK042421-2213:',0,0,'L');
            $this->Ln('5');
            $this->SetFont('Arial','B',13);
            $this->Cell(110,8,'',0,0,'L');
            $this->Cell(45,8,'Control Number:',0,0,'L');
            $this->SetFont('Arial','',13);
            $this->Cell(40,8,'ACTBFP088490:',0,0,'L');
            $this->Ln('5');
            $this->SetFont('Arial','B',13);
            $this->Cell(110,8,'',0,0,'L');
            $this->Cell(45,8,'Certificate Issued:',0,0,'L');
            $this->SetFont('Arial','',13);
            $this->Cell(40,8,'04/27/2021 14:34',0,0,'L');

            $this->Ln('20');
            $this->Image('../image/signsam.png',10,290,-1000);
            $this->SetFont('Arial','B',9);
            $this->Cell(110,8,'SAMPLE NAME, RMT:',0,0,'L');

            $this->Ln('4');
            $this->SetFont('Arial','',8);
            $this->Cell(110,8,'Medical Technologist, RMT:',0,0,'L');

            $this->Image('../image/trylang2.png',140,290,-300);
            $this->Ln('4');
            $this->SetFont('Arial','',8);
            $this->Cell(110,8,'PCR ID NO.99501, RMT:',0,0,'L');

        }
        function footer(){
            
            $this->SetY(-15);
            $this->SetFont('Arial','B',8);
            $this->Cell(0,10,'PHILIPPINES RED CROSS - CLARK MOLECULAR LABORATORY (CLARK, PAMPANGA)',0,0,'C');
        }
    }  
    
    $pdf = new mySwabreport();
    $pdf->AliasNbPages();
    $pdf->AddPage('P','Legal',0);
    $pdf->basicInfo();
    $pdf->resultInfo();
    $pdf->methInfo();
    $pdf->litInfo();
    $pdf->noteInfo();
    $pdf->medicalInfo();
    // $pdf->Output();
    $pdf->Output('D',date("m/d/Y").'.pdf','');

?>