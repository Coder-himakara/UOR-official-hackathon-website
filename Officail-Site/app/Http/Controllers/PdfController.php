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

        // Add a font (adjust the path according to your project structure)
       // Assuming Roboto-Thin.ttf is directly inside the public/fonts directory
        $imagePath=public_path('images/pdfheader.png');
        $pdf->Image($imagePath);
        $pdf->SetFont('Arial', 'B', 16);


        // Output team data in the PDF
        $pdf->Cell(40, 10, utf8_decode('Team Name: ' . $Hackteam ->teamName));
        $pdf->Ln(); // Line break
        $pdf->Cell(40, 10, utf8_decode('Leader Name: ' . $Hackteam ->LeaderName));
        $pdf->Ln();
        $pdf->Cell(40, 10, utf8_decode('Leader Contact: ' .$Hackteam ->member1Contact));
        $pdf->Ln();
        $pdf->Cell(40, 10, utf8_decode('Leader Faculty: ' .$Hackteam ->leader_faculty));
        $pdf->Ln();
        // Add other cells for additional data
        $pdf->Cell(40, 10, utf8_decode('Leader Batch no: ' . $Hackteam ->leader_batchNumber));
        // Output the PDF to the browser
        $pdf->Output('D', 'Your_team_data.pdf'); // 'D' forces download, you can change as needed
    }
    
    
    

}
