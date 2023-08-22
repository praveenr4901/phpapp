<?php

namespace App\Imports;

use App\Models\Member;
use Carbon\Carbon;
use Illuminate\Database\QueryException;
use Illuminate\Support\Collection;
use Maatwebsite\Excel\Concerns\ToCollection;
use Maatwebsite\Excel\Concerns\WithHeadingRow;
use Maatwebsite\Excel\Concerns\WithValidation;

class DataImport implements ToCollection, WithHeadingRow, WithValidation
{
    public function collection(Collection $rows)
    {
        foreach ($rows as $row) {
            try {
                // Check if a record with the same member_id exists in the database
                $existingMember = Member::where('id', $row['member_id'])->first();
                if (!$existingMember) {
                    // If no record exists with the same member_id, create a new one
                    Member::create([
                        'clubid' => $row['club_id'],
                        'date' => Carbon::now()->format('Y-m-d'),
                        'id' => $row['member_id'],
                        'name' => $row['first_name'].' '.$row['middle_name'].' '.$row['last_name'],
                        'address' => $row['member_address_line_1'],
                        'email' => $row['email'],
                        'phone' => $row['home_phone'],
                        'anniversary' => null,
                        'specialization' => '',
                        'mobile' => $row['cell_phone'],
                        'whatsapp' => $row['cell_phone'],
                        'spouse' => $row['spouse_name'],
                        'dob' => $row['date_of_birth'],
                        'gender' => $row['gender'],
                        'profession' => $row['occupation'],
                        'joindate' => $row['join_date'],
                    ]);
                } else {
                    // If a record already exists with the same member_id, you can choose to update it or skip creating a new one
                    // For example, you can update the existing record with the new data
                    $existingMember->update([
                        'clubid' => $row['club_id'],
                        'date' => Carbon::now()->format('Y-m-d'),
                        'name' => $row['first_name'],
                        'address' => $row['member_address_line_1'],
                        'email' => $row['email'],
                        'phone' => $row['home_phone'],
                        'mobile' => $row['cell_phone'],
                        'whatsapp' => $row['cell_phone'],
                        'spouse' => $row['spouse_name'],
                        'dob' => $row['date_of_birth'],
                        'gender' => $row['gender'],
                        'profession' => $row['occupation'],
                        'joindate' => $row['join_date'],
                    ]);
                }
            } catch (QueryException $e) {
                $errorMessage = $e->getMessage();
                return back()->withErrors(['error' => "An error occurred while importing the data: $errorMessage "]);            }
        }
    }

    public function rules(): array
    {
        return [
        ];
    }
}

