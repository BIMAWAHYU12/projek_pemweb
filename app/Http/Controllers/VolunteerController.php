<?php

namespace App\Http\Controllers;

use App\Models\Volunteer;
use Illuminate\Http\Request;

class VolunteerController extends Controller
{
   public function showByCategory($categoryId, $viewName)
    {
            $data = Volunteer::with('bookmarkedBy')->where('category_id', $categoryId)
            ->whereNull('deleted_at')
            ->latest()
            ->paginate(6);

        return view($viewName, ['items' => $data]);
    }
}
