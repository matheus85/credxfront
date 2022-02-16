<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TrackingController extends BaseController
{
    public function index()
    {
        return view('tracking.index');
    }

    public function create()
    {
        return view('tracking.create');
    }

    public function store(Request $request)
    {
        $response = $this->requestApi('trackings', 'post', $request->all());

        if ($response['status'] == 201) {
            return redirect()->route('trackings.index');
        } else {
            return redirect()->back()->withError($response['message']);
        }
    }

    public function edit($id)
    {
        $response = $this->requestApi('trackings/' . $id);

        if ($response['status'] == 200) {
            return view('tracking.edit', [
                'tracking' => $response['data']
            ]);
        } else {
            return redirect()->back()->withError($response['message']);
        }
    }

    public function update(Request $request, $id)
    {
        $response = $this->requestApi('trackings/' . $id, 'put', $request->all());

        if ($response['status'] == 200) {
            return redirect()->route('trackings.index');
        } else {
            return redirect()->back()->withError($response['message']);
        }
    }

    public function destroy($id)
    {
        return $this->requestApi('trackings/' . $id, 'delete');
    }

    public function datatables()
    {
        return $this->requestApi('trackings');
    }
}
