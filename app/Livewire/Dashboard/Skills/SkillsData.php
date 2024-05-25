<?php

namespace App\Livewire\Dashboard\Skills;

use App\Models\Skill;
use Livewire\Component;
use Livewire\WithPagination;

class SkillsData extends Component
{
    use WithPagination;


    protected $paginationTheme = 'bootstrap';

    public $search;

    // protected $queryString = [       //حتى لايظهر فى الurl بإسم Search
    //     'search'=>['except'=>'', 'as' =>'Y'],
    //     // 'page'=>['except'=>1],
    // ];

    public function updatingSearch()
    {
        $this->resetPage();
    }


    public function render()
    {
        return view('dashboard.skills.skills-data',
        ['data' => Skill::where('name','like', '%'. $this->search . '%' )->paginate(10)]
    );

    }
}
