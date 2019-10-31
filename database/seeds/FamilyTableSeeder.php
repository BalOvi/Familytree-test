<?php

use Illuminate\Database\Seeder;
use App\Family;

class FamilyTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        $familyMember = new Family();
        $familyMember->first_name = "grandparent_1_fName";
        $familyMember->middle_name = "grandparent_1_mName";
        $familyMember->last_name = 'grandparent_1_lName';
        $familyMember->gender = 1;
        $familyMember->parent_id = 0;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 0;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 1;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 1;
        $familyMember->parent_id = 1;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 2;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 2;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 3;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 4;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 5;
        $familyMember->save();

        $familyMember = new Family();
        $familyMember->first_name = "grandparent_2_fName";
        $familyMember->middle_name = "grandparent_2_mName";
        $familyMember->last_name = 'grandparent_2_lName';
        $familyMember->gender = 0;
        $familyMember->parent_id = 6;
        $familyMember->save();
    }
}
