<?php

namespace App\Exports;

use App\Registrant;
use Carbon\Carbon;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;
use Maatwebsite\Excel\Concerns\ShouldAutoSize;
use Maatwebsite\Excel\Concerns\WithColumnWidths;

class RegistrantsExport implements FromCollection, WithHeadings, WithMapping, WithColumnFormatting, WithColumnWidths
{
    public function __construct($lane)
    {
        $this->lane = $lane;
    }
    // public function properties(): array
    //    {
    //        return [
    //            'creator'        => 'Ditya Developer',
    //            'lastModifiedBy' => 'Ditya Developer',
    //            'title'          => 'Registrant PPDB Export',
    //            'description'    => 'Registrant Master Data Of PPDB Export',
    //            'subject'        => 'Registrant',
    //            'keywords'       => 'registrant,export,spreadsheet',
    //            'category'       => 'Registrant',
    //            'manager'        => 'Registrant PPDB Export',
    //            'company'        => 'Registrant PPDB Export',
    //        ];
    //    }
    /**
     * @return \Illuminate\Support\Collection
     */
    public function collection()
    {
        if ($this->lane == null) {
            $data = Registrant::all();
        } else {
            $data = Registrant::where('lane', $this->lane)->get();
        }

        return $data;
    }

    public function headings(): array
    {
        return [
            'ID',
            'ID Registrant',
            // 'Avatar',
            'Name',
            'Place Birth',
            'Date Birth',
            'Gender',
            'Region',
            'Phone',
            'Parent Name',
            'Parent Phone',
            'School Origin',
            'Adress',
            'Majors',
            'Kelas',
            'Bing S3',
            'Bing S3',
            'Bing S3',
            'Average Bing',
            'Mat S3',
            'Mat S3',
            'Mat S3',
            'Average Matematic',
            'IPS S3',
            'IPS S3',
            'IPS S3',
            'Average IPS',
            'IPA S3',
            'IPA S3',
            'IPA S3',
            'Average IPA',
            'Registration On'
        ];
    }

    public function map($registrant): array
    {
        return [
            $registrant->id,
            $registrant->id_registrant,
            $registrant->name,
            $registrant->place_birth,
            Date::dateTimeToExcel(Carbon::parse($registrant->date_birth)),
            $registrant->get['gender'],
            $registrant->region,
            $registrant->phone,
            $registrant->parent_name,
            $registrant->parent_phone,
            $registrant->school_origin,
            $registrant->adress,
            $registrant->majors,
            $registrant->lane,
            $registrant->bing_sm3,
            $registrant->bing_sm4,
            $registrant->bing_sm5,
            $registrant->average_bing,
            $registrant->mat_sm3,
            $registrant->mat_sm4,
            $registrant->mat_sm5,
            $registrant->average_mat,
            $registrant->ips_sm3,
            $registrant->ips_sm4,
            $registrant->ips_sm5,
            $registrant->average_ips,
            $registrant->ipa_sm3,
            $registrant->ipa_sm4,
            $registrant->ipa_sm5,
            $registrant->average_ipa,
            Date::dateTimeToExcel(Carbon::parse($registrant->created_at)),
        ];
    }

    public function columnWidths(): array
    {
        return [
            'A' => 5,
            'B' => 20,
            'C' => 35,
            'D' => 15,
            'E' => 15,
            'F' => 15,
            'G' => 15,
            'H' => 15,
            'I' => 15,
            'J' => 15,
            'K' => 15,
            'L' => 15,
            'M' => 15,
            'N' => 15,
            'O' => 15,
            'P' => 15,
            'Q' => 15,
            'R' => 15,
            'S' => 15,
            'T' => 15,
            'U' => 15,
            'V' => 23,
            'W' => 15,
            'X' => 15,
            'Y' => 15,
            'Z' => 15,
            'AA' => 15,
            'AB' => 15,
            'AC' => 15,
            'AD' => 15,
            'AE' => 25,
        ];
    }
    public function columnFormats(): array
    {
        return [
            'E'     => NumberFormat::FORMAT_DATE_DDMMYYYY,
            'AE'     => NumberFormat::FORMAT_DATE_DDMMYYYY,
        ];
    }
}
