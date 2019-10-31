<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Family;
use Validator;

class FamilyController extends Controller
{
    public function index($id)
    {
        $familyMember = Family::whereId($id)->with('children')->get();
        return $familyMember;
    }
    public function store(Request $request)
    {
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|integer',
            'parent_id' => 'integer'
        ]);

        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->messages()], 422);
        } else {
            $familyMember = Family::create($request->all());
            return $familyMember;
        }
    }
    public function update(Request $request)
    {
        $familyMember = Family::findOrFail($request->id);
        $validatedData = Validator::make($request->all(), [
            'first_name' => 'required|string|max:255',
            'middle_name' => 'required|string|max:255',
            'last_name' => 'required|string|max:255',
            'gender' => 'required|integer',
            'parent_id' => 'integer'
        ]);

        if ($validatedData->fails()) {
            return response()->json(['errors' => $validatedData->messages()], 422);
        } else {
            $familyMember->update($request->all());
            return $familyMember;
        }
    }
    public function delete(Request $request)
    {
        $familyMember = Family::findOrFail($request->id);
        if ($familyMember->delete()) {
            return $familyMember;
        }
    }
}
