<?php

namespace App\Http\Livewire\Admin;

use Livewire\Component;
use App\Models\SettingsModel;


class Settings extends Component
{

    public $title, $description, $editId, $footer;

  // public function submit()
    // {
    //     $this->validate([
    //         'title' => 'required',
    //         'description' => 'required',
    //         'footer' => 'required'
    //     ]);

    //     $saveSettings = new settingsModel();
    //     $saveSettings->title = $this->title;
    //     $saveSettings->description = $this->description;
    //     $saveSettings->footer = $this->footer;
    //     $saveSettings->save();
    //     // session()->flash('message', 'Setting added successfully');
     
    // }
    // public function edit($id)
    // {

    //     $settings = settingsModel::where('id', $id)->first();
    //     $this->editId = $id;
    //     $this->title = $settings->title;
    //     $this->description =  $settings->description;
    //     $this->footer =  $settings->footer;
    // }



    public function update()
    {

        $this->validate([
            'title' => 'required',
            'description' => 'required',
            'footer' => 'required'
        ]);

        $settingsUpdate = settingsModel::find($this->editId);


        $settingsUpdate->update([
            'title' => $this->title,
            'description' => $this->description,
            'footer' => $this->footer,
        ]);

        $this->is_update = false;
     

        session()->flash('message', 'Setting updated successfully.');
         $this->dispatchBrowserEvent('refresh-page');
    }
 

    public function mount()
    {
        $settings = settingsModel::first();
        $this->editId = $settings->id;
        $this->title = $settings->title;
        $this->description = $settings->description;
        $this->footer = $settings->footer;
    }



    public function render()
    {
        $settings = settingsModel::first();

        return view('livewire.admin.settings', [
            'settings' => $settings
        ]);
    }
}
