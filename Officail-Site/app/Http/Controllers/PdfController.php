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
        $textX = 5; //  x-coordinate from the left=0
        $textY = $y + $headerHeight + 10; // Adjust the 10 based on the space you want between image and text

        // Add text below the image
        $pdf->SetXY($textX, $textY);
        $pdf->SetFont('Times', 'B', 14);
        $paragraph = "                                                     This is your Team Card.
        If there is any mistake feel free to contact the Hackathon collaborators to correct those.
        Practise hard to make your team win this Hackathon.Happy Coding!";
        
        $pdf->MultiCell($headerWidth, 7, utf8_decode($paragraph));
        
        //$pdf->Ln(); // Line break
        $pdf->Ln();
        // Set a different font style for the table data
        $pdf->SetFont('Arial','B', 10); // Bold font style

        // Output team data in a two-column table
        $data = [
            'Team Name' => $Hackteam->teamName,          
            'Leader Name' => $Hackteam->LeaderName,
            'Leader Contact' => $Hackteam->member1Contact,
            'Leader Faculty' => $Hackteam->leader_faculty,
            'Leader Year' => $Hackteam->leader_year,
            'Leader Student ID No' => $Hackteam->member1SID,
            'Leader Email' => $Hackteam->member1Email,
            'Member 02 Name' => $Hackteam->member2Name,
            'Member 02 Contact' => $Hackteam->member2Contact,
            'Member 02 Faculty' => $Hackteam->m2_faculty,
            'Member 02 Year' => $Hackteam->m2_year,
            'Member 02 Student ID No' => $Hackteam->member2SID,
            'Member 02 Email' => $Hackteam->member2Email,
            'Member 03 Name' => $Hackteam->member3Name ,
            'Member 03 Contact' => $Hackteam->member3Contact,
            'Member 03 Faculty' => $Hackteam->m3_faculty,
            'Member 03 Year' => $Hackteam->m3_year,
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
