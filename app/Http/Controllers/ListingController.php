<?php

namespace App\Http\Controllers;

use App\Models\Listing;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Validation\Rule;

class ListingController extends Controller
{
    //show all listings
    public static function index(Request $req)
    {
        return view('listings.index', [
            "heading" => "Dashain Bhandarai",
            "listings" => Listing::latest()->filter($req->query())->paginate(6)
        ]);
    }


    //show single listings
    public static function show(Listing $listing)
    {
        return view('listings.show', [
            "listing" => $listing
        ]);
    }

    //create listing
    public function create()
    {
        return view("listings.create");
    }

    //update listing
    public function edit(Listing $listing)
    {
        return view("listings.update", ["listing" => $listing]);
    }

    //create listing
    public function store(Request $request)
    {

        $formfields = $request->validate(
            [
                "title" => [
                    "required",
                    "max:255",
                    "min:4"
                ],
                "company" => ["required"],
                "description" => "required",
                "location" => "required",
                "website" => "required",
                "email" => ["required", "email", "unique:listings"],
                "tags" => "required"
            ]
        );
        $formfields["user_id"]=Auth::id();
       
        if ($request->hasFile("logo")) {
            $formfields["logo"] = $request->file("logo")->store("logos", "public");
        }
        Listing::create($formfields);
        return redirect("/");
    }

    public function update(Request $request, Listing $listing)
    {

        $formfields = $request->validate(
            [
                "title" => [
                    "required",
                    "max:255",
                    "min:4"
                ],
                "company" => ["required"],
                "description" => "required",
                "location" => "required",
                "website" => "required",
                "email" => ["required", "email"],
                "tags" => "required"
            ]
        );
        $formfields["user_id"]=$request->user()->id;
        dd($formfields["user_id"]);
        if ($request->hasFile("logo")) {
            $formfields["logo"] = $request->file("logo")->store("logos", "public");
        }
        $listing->update($formfields);
        return redirect("/");
    }

    public function delete(Listing $listing)
    {
        $listing->delete();
        return redirect("/");
    }
}
