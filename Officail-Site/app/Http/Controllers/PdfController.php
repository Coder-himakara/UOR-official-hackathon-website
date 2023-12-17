<?php

namespace App\Http\Controllers;
use Codedge\Fpdf\Fpdf\Fpdf;
use Illuminate\Http\Request;
use App\Models\Hackteam;

class PdfController extends Controller
{
    public function generatePdf($id){
            // Retrieve the Team instance using the id
        $Hackteam = Hackteam::find($id); //creating an object from Hackteam model

        // Check if the team exists
        if (!$Hackteam ) {
            return response()->json(['error' => 'Team not found'], 404);
        }

        // Create a new FPDF instance
        $pdf = new Fpdf();

        // Add a page to the PDF
        $pdf->AddPage();

      
        $imagePath=public_path('images/pdfheader.png'); //add any image path
       
        // Image dimensions in pixels
        $imageWidthPixels = 2480;
        $imageHeightPixels = 498;

        // Calculate aspect ratio
        $aspectRatio = $imageWidthPixels / $imageHeightPixels;

        // Define header dimensions
        $headerWidth = 2.94 * 72; // Full width of the page in points
        $headerHeight = $headerWidth / $aspectRatio; // Adjusted height to maintain aspect ratio
        $x = 0; // Adjust this value based on your layout
        $y = 0; // Adjust this value based on your layout
        // Add an image to the PDF as the header
        $pdf->Image($imagePath, $x, $y, $headerWidth, $headerHeight);

        // Set new coordinates for text below the image
        $textX = 10; //  x-coordinate from the left=0
        $textY = $y + $headerHeight + 10; // Adjust the 10 based on the space you want between image and text

        // Add text below the image
        $pdf->SetXY($textX, $textY);
        $pdf->SetFont('Arial', 'B', 12);
        $paragraph = "This is a paragraph of text that you want to include between the image and the table. You can 
        customize the content and formatting of this text based on your requirements.";
        
        $pdf->MultiCell($headerWidth, 7, utf8_decode($paragraph));
        
        $pdf->Ln(); // Line break
        $pdf->Ln();
        // Output team data in a two-column table
        $data = [
            'Team Name' => $Hackteam->teamName,          
            'Leader Name' => $Hackteam->LeaderName,
            'Leader Contact' => $Hackteam->member1Contact,
            'Leader Faculty' => $Hackteam->leader_faculty,
            'Leader Batch no' => $Hackteam->leader_batchNumber,
            'Leader Student ID No' => $Hackteam->member1SID,
            'Leader Email' => $Hackteam->member1Email,
            'Member 02 Name' => $Hackteam->member2Name,
            'Member 02 Contact' => $Hackteam->member2Contact,
            'Member 02 Faculty' => $Hackteam->m2_faculty,
            'Member 02 Batch no' => $Hackteam->m2_batchNumber,
            'Member 02 Student ID No' => $Hackteam->member2SID,
            'Member 02 Email' => $Hackteam->member2Emai,
            'Member 03 Name' => $Hackteam->member3Name ,
            'Member 03 Contact' => $Hackteam->member3Contact,
            'Member 03 Faculty' => $Hackteam->m3_faculty,
            'Member 03 Batch no' => $Hackteam->m3_batchNumber,
            'Member 03 Student ID No' => $Hackteam->member3SID,
            'Member 03 Email' => $Hackteam->member3Email,
        ];

        foreach ($data as $label => $value) {
            // Column 1: Label
            $pdf->Cell(60, 10, utf8_decode($label . ': '), 1); //60-column size or length 10-margin bottom

            // Column 2: Value
            $pdf->Cell(0, 10, utf8_decode($value), 1);
            
            // Line break for the next row
            $pdf->Ln();
        }

        // Output the PDF to the browser

        $pdf->Output('D', 'Your_team_data.pdf'); // 'D' forces download, you can change as needed
    }
    
    
    

}
