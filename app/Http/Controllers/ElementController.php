<?php

namespace App\Http\Controllers;

use App\Http\Requests\ElementRequest;
use App\Models\Element;

class ElementController extends Controller
{
	public function showElements() {
		$elements = Element::all();
		return view("homepage", compact("elements"));
	}

	public function storeElement(ElementRequest $request) {
		Element::create(
            [
                'productName' => $request->input('productName'),
                'productQuantity' => $request->input('productQuantity'),
            ]
        );
		return redirect(route("homepage"));
	}
}
