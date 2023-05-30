<?php

namespace App\Http\Livewire\Admin\Category;

use App\Models\Categories;
use App\Models\SubCategories;
use Livewire\Component;
use App\Models\CompanyDeals;
use Livewire\WithPagination;


class SubcategoryIndex extends Component
{
    use WithPagination;

    public $name, $category_id, $subcategory_id;
    public $is_update = false;
    public $searchTerm;
    public $deleteId = '';
    // public $category;

    public function render()
    {


        $searchTerm = '%' . $this->searchTerm . '%';

        $categories = SubCategories::where(['category_id' => $this->category_id])->where(function ($query) use ($searchTerm) {
            $query->where('name', 'like', '%' .  $searchTerm  . '%');
        })->orderBy('id', 'desc')->paginate(10);

        return view('livewire.admin.category.subcategory-index', \compact('categories'));
    }

    private function clearForm()
    {
        $this->name = '';
    }

    public function store()
    {
        $validated = $this->validate([
            'name' => 'required|string',
        ]);
        $validated['category_id'] = $this->category_id;
        
        SubCategories::create(array_merge($validated));
        $this->clearForm();
    }

    public function edit($id)
    {
        $category = SubCategories::where('id', $id)->first();
        $this->is_update = true;
        $this->subcategory_id = $id;
        $this->name = $category->name;
    }



    public function update()
    {

        $validated = $this->validate([
            'name' => 'required|string',
        ]);

        $category = SubCategories::find($this->subcategory_id);


        $category->update([
            'name' => $this->name,
        ]);

        $this->is_update = false;
        $this->clearForm();

        session()->flash('message', 'Sub Category Updated Successfully.');
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
        SubCategories::find($this->deleteId)->delete();
        session()->flash('message', 'Sub Category Deleted Successfully.');
    }

}
