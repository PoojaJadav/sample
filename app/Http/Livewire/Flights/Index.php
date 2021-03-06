<?php

namespace App\Http\Livewire\Flights;

use App\Http\Livewire\WithSorting;
use App\Models\Flight;
use Livewire\Component;
use Livewire\WithPagination;

class Index extends Component
{
    use WithSorting, WithPagination;

    public $search;

    protected $queryString = [
        'search' => ['except' => ''],
    ];

    public function render()
    {
        return view('livewire.flights.index', [
            'flights' => Flight::query()
                ->when($this->search, function($q) {
                    // perform search
                })
                ->when($this->sort_by, function($q) {
                    $q->orderBy($this->sort_by, $this->sort_direction);
                })
                ->latest()
                ->paginate()
        ]);
    }
}
