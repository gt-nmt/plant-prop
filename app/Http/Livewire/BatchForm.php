<?php

namespace App\Http\Livewire;

use App\Models\Batch;
use Livewire\Component;
use Livewire\WithPagination;

class BatchForm extends Component
{
    use WithPagination;

    public $title;
    public $description;
    public $batch_id;

    protected $rules = [
        'plant_name' => 'required',
        'customer_name' => 'required',
    ];

    public function storeBatch()
    {
        $this->validate();
        $post = Batch::create([
            'plant_name' => $this->plant_name,
            'customer_name' => $this->customer_name,
        ]);
        $this->reset();
    }

    public function edit($id)
    {
        $batch = Batch::find($id);
        $this->id = $batch->id;
        $this->plant_name = $batch->plant_name;
        $this->customer_name = $batch->customer_name;
    }

    public function update()
    {
        $batch = Batch::updateOrCreate(
            [
                'id'   => $this->id,
            ],
            [
                'plant_name' => $this->plant_name,
                'customer_name' => $this->customer_name
            ],
        );
        $this->reset();
    }

    public function destroy($id)
    {
        Batch::destroy($id);
    }

    public function render()
    {
        return view('livewire.batch-form', ['batches' => Batch::paginate(10),]);
    }
}
