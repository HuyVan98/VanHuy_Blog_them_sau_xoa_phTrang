<?php

namespace App\Http\Controllers;

use App\Models\Item;
use Carbon\Carbon;
use Illuminate\Http\Request;

class ItemController extends Controller
{
    public function index()
    {
        return Item::orderBy('created_at', 'DESC')->get();
    }

    public function create()
    {
        //
    }

    public function store(Request $request)
    {
        $newItem = new Item();
        $newItem->name = $request->name;
        // $newItem->name = $request->item['name'];
        $newItem->save();

        return $newItem;
    }

    public function show($id)
    {
        //
    }
    public function update(Request $request, $id)
    {
        $exitinItem = Item::find($id);
        if ($exitinItem) {
            $exitinItem->namcompleted = $request->item['namcompleted'] ? true : false;
            $exitinItem->completed_at = $request->item['namcompleted'] ? Carbon::now() : false;
            $exitinItem->save();
            return $exitinItem;
        }
    }

    public function destroy($id)
    {
        $exitinItem = Item::find($id);
        if ($exitinItem) {
            $exitinItem->delete();
            return "Xoa thanh cong";
        }
        return "Item khong ton tai";
    }
}
