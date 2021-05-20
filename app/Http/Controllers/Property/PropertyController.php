<?php

namespace App\Http\Controllers\Property;

use App\Http\Controllers\Controller;
use App\Property;
use Illuminate\Http\Request;

class PropertyController extends Controller
{
    public function create()
    {
        return view('agent.property.create');
    }

    public function store(Request $request)
    {
        if ($request->ajax()) {
            $propert = new Property();
            $propert->agent_id = $request->agent_id;
            $propert->propert_title = $request->propert_title;
            if ($request->hasFile('gallery_photos')) {
                $images = [];
                foreach ($request->file('gallery_photos') as $image) {
                    if (!empty($propert->gallery_photos)) {
                        $image_path = $propert->gallery_photos;
                        unlink($image_path);
                    }

                    $name = time() . 'property' . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'property_images/';
                    $image->move($destinationPath, $name);
                    array_push($images, 'property_images/' . $name);
                };
                $propert->gallery_photos = json_encode($images);
            }

            if ($request->hasFile('plane_photos')) {
                $files = [];
                foreach ($request->file('plane_photos') as $image) {
                    if (!empty($propert->plane_photos)) {
                        $image_path = $propert->plane_photos;
                        unlink($image_path);
                    }

                    $name = time() . 'property' . '.' . $image->getClientOriginalExtension();
                    $destinationPath = 'property_plane_images/';
                    $image->move($destinationPath, $name);
                    array_push($files, 'property_plane_images/' . $name);
                };
                $propert->plane_photos = json_encode($files);
            }

            $propert->price = $request->price;
            $propert->bedroom = $request->bedroom;
            $propert->bathroom = $request->bathroom;
            $propert->garages = $request->garages;
            $propert->area = $request->area;
            $propert->area_postfix = $request->area_postfix;
            $propert->property_type = $request->property_type;
            $propert->propert_status = $request->propert_status;
            $propert->description = $request->description;
            $propert->property_video_url = $request->property_video_url;
            $propert->virtual_tour = $request->virtual_tour;
            $propert->air_conditioning = $request->air_conditioning;
            $propert->heating = $request->heating;
            $propert->air_conditioning1 = $request->air_conditioning1;
            $propert->heating1 = $request->heating1;
            $propert->balcony = $request->balcony;
            $propert->internet = $request->internet;
            $propert->balcony1 = $request->balcony1;
            $propert->internet1 = $request->internet1;
            $propert->bedding1 = $request->bedding1;
            $propert->microwave = $request->microwave;
            $propert->bedding2 = $request->bedding2;
            $propert->microwave1 = $request->microwave1;
            $propert->cable_tv_1 = $request->cable_tv_1;
            $propert->oven = $request->oven;
            $propert->cable_tv_2 = $request->cable_tv_2;
            $propert->oven_1 = $request->oven_1;
            $propert->coffee_pot = $request->coffee_pot;
            $propert->toaster = $request->toaster;
            $propert->coffee_pot_1 = $request->coffee_pot_1;
            $propert->toaster_1 = $request->toaster_1;
            $propert->dashwasher = $request->dashwasher;
            $propert->parking = $request->parking;
            $propert->dashwasher1 = $request->dashwasher1;
            $propert->parking1 = $request->parking1;
            $propert->country = $request->country;
            $propert->state = $request->state;
            $propert->city = $request->city;
            $propert->location = $request->location;
            $propert->private_note = $request->private_note;
            $propert->save();
            return response()->json([
                'success' => 'Property Add Successfully!',
            ]);
        }
    }
}
