<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Categories;
use Livewire\Component;
use App\Models\CompanyDeals;
use Livewire\WithPagination;


class CategoryIndex extends Component
{
    use WithPagination;

    public $category_name, $category_id;
    public $is_update = false;
    public $searchTerm;
    public $deleteId = '';
    // public $category;

    public function render()
    {

        $searchTerm = '%' . $this->searchTerm . '%';

        $categories = Categories::where(function ($query) use ($searchTerm) {
            $query->where('category_name', 'like', '%' .  $searchTerm  . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.category.category-index', \compact('categories'));
    }

    private function clearForm()
    {
        $this->category_name = '';
    }

    public function store()
    {
        $validated = $this->validate([
            'category_name' => 'required|string',
        ]);

        Categories::create(array_merge($validated));
        $this->clearForm();
    }

    public function edit($id)
    {
        $category = Categories::where('id', $id)->first();
        $this->is_update = true;
        $this->category_id = $id;
        $this->category_name = $category->category_name;
    }



    public function update()
    {

        $validated = $this->validate([
            'category_name' => 'required|string',
        ]);

        $category = Categories::find($this->category_id);


        $category->update([
            'category_name' => $this->category_name,

        ]);

        $this->is_update = false;
        $this->clearForm();

        session()->flash('message', 'Company Data Updated Successfully.');
    }

    public function cancel()
    {
        $this->is_update = false;
        $this->clearForm();
    }

    public function deleteId($id) 
    {
        $this->deleteId = $id;
    }

    public function delete()
    {
        Categories::find($this->deleteId)->delete();

        session()->flash('message', 'Category Deleted Successfully.');
    }

    public function subcategory($id)
    {
        return redirect()->to('/subcategory-index/'.$id);
        // $category = Categories::where('id', $id)->first();       
        // return view('livewire.admin.category.subcategory-view', compact('category'));

    }
}
