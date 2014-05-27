<?php

class HomeController extends BaseController {


	public function getIndex()
	{

    $items = Auth::user()->items;

		return View::make('home', array(

       'items' => $items

      ));
	}

  public function postIndex() {

    $id = Input::get('id');

    

    $item = Item::findOrFail($id);

    if ($item->owner_id == Auth::user()->id) {

      $item->mark();

    }


    return Redirect::route('home');

  }

  public function getNew() {

    return View::make('new');

  }

  public function postNew() {

    $rules = array('name' => 'required|min:3|max:255');

    $validator = Validator::make(Input::all(), $rules);

    if ($validator->fails()) {

      return Redirect::route('new')->withErrors($validator);

    }

    // puts new item in database

    $item = new Item;

    $item->name = Input::get('name');

    $item->owner_id = Auth::user()->id;

    $item->save();

    return Redirect::route('home');

  }

   
  public function getEdit() {

    return View::make('edit');
    }

    public function postUpdate() {
      


      return Redirect::route('home');

    }


  public function getDelete(Item $task) {


    if ($task->owner_id == Auth::user()->id) {

      $task->delete();

    }

    return Redirect::route('home');

  }

}
