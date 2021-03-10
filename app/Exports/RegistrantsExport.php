<?php

namespace App\Exports;

use App\Registrant;
use PhpOffice\PhpSpreadsheet\Shared\Date;
use Maatwebsite\Excel\Concerns\FromCollection;
// use Maatwebsite\Excel\Concerns\FromQuery;
use Maatwebsite\Excel\Concerns\WithHeadings;
use Maatwebsite\Excel\Concerns\WithMapping;
use PhpOffice\PhpSpreadsheet\Style\NumberFormat;
use Maatwebsite\Excel\Concerns\WithColumnFormatting;

class RegistrantsExport implements FromCollection, WithHeadings, WithMapping
{
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
        return Registrant::all();
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
            $registrant->date_birth,
            $registrant->gender,
            $registrant->region,
            $registrant->phone,
            $registrant->parent_name,
            $registrant->parent_phone,
            $registrant->school_origin,
            $registrant->adress,
            $registrant->majors,
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
            Date::dateTimeToExcel($registrant->created_at),
        ];
    }

    // public function columnFormats(): array
    // {
    //     return [
    //     	'H'	 => NumberFormat::FORMAT_GENERAL,
    //         'AD' => NumberFormat::FORMAT_DATE_YYYYMMDD2,
    //     ];
    // }
}
