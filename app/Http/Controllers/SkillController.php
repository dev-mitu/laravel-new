<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    // Returns the skills index page (listing all skills)
    public function skills()
    {
        return view('skills.index'); // Ensure the view exists at resources/views/skills/index.blade.php
    }

    // Returns the create page for a new skill
    public function skillCreate()
    {
        return view('skills.create'); // Ensure the view exists at resources/views/skills/create.blade.php
    }
}

