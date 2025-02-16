<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Livewire\WithFileUploads;
use Livewire\WithPagination;

class CustomerServicesView extends Component
{
    use WithPagination;

    public $search;
    public $categories;
    public $categoryFilter = [];
    public $sortByPrice = 'price';
    public $sortDirection = 'asc'; // Add this line

    public $sortDropDown  = 'PriceLowToHigh'; // Add this line

    private $services;

    protected $queryString = [
        'search' => ['except' => ''],
        'categoryFilter' => ['except' => []],
        'sortDropDown' => ['except' => 'PriceLowToHigh'],
    ];

    public function mount()
    {
        $this->categories = \App\Models\Category::all();

        // Initialize categoryFilter with all category IDs
        $this->categoryFilter = $this->categories->pluck('id')->toArray();
    }

    public function render()
    {
        $query = Service::query();

        if ($this->search) {
            $query->where(function ($subquery) {
                $subquery->where('name', 'like', '%' . $this->search . '%')
                    ->orWhere('description', 'like', '%' . $this->search . '%');
            });
        }

        if (!in_array(0, $this->categoryFilter)) {
            // Exclude 0 (which represents "All" category) from the filter
            $query->whereIn('category_id', $this->categoryFilter);
        }

        // Determine whether to show category names in the URL or not
        $showCategoryNames = count($this->categoryFilter) <= 3;

        // Order by the actual column name based on the user-friendly dropdown
        $query->orderBy($this->sortByPrice, 'asc'); // Default to ascending order

        $this->services = $query->paginate(10);

        return view('livewire.customer-services-view', [
            'services' => $this->services,
            'categories' => $this->categories,
            'showCategoryNames' => $showCategoryNames, // Pass this variable to your view
        ]);
    }

    public function updatedCategoryFilter()
    {
        // If the categoryFilter changes, reset the page number to 1
        $this->resetPage();
    }

    //    public function updatedCategoryFilter()
    //    {
    //        $this->render(); // Re-render the component
    //    }

    public function updatedSortDropDown($value)
    {
        // Map user-friendly sort options to actual column names
        $sortOptions = [
            'PriceLowToHigh' => 'price',
            'PriceHighToLow' => 'price',
        ];

        // Validate and set the sort column based on user selection
        $this->sortByPrice = $sortOptions[$value] ?? 'price'; // Fallback to default if not found

        // Set the order direction based on the selected option
        $this->sortDirection = ($value == 'PriceLowToHigh') ? 'asc' : 'desc';
    }

    public function sortByMostPopular($sort)
    {
        // validate $sort value to only be 'PriceLowToHigh' or 'PriceHighToLow'

        if ($sort == 'PriceLowToHigh' || $sort == 'PriceHighToLow') {
            $this->sortByPrice = $sort;
        } else {
            $this->sortByPrice = 'PriceLowToHigh';
        }

        echo $this->sortByPrice;



        $this->render(); // Re-render the component
    }
}
