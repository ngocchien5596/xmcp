<?php
 
 namespace App\Http\Controllers;
 
 use Illuminate\Http\Request;
 
 class ProjectController extends Controller
 {
     /**
      * Display a listing of the projects.
      *
      * @return \Illuminate\View\View
      */
     public function index(Request $request)
     {
         $category = $request->query('category');
         $allProjects = config('projects.projects');
         $categories = config('projects.categories');
         
         $projects = collect($allProjects);
         
         if ($category) {
             $projects = $projects->where('category', $category);
         }
         
         $projects = $projects->all();
         $currentCategory = $category;
         $partners = config('partners');
 
         return view('pages.projects.index', compact('projects', 'categories', 'currentCategory', 'partners'));
     }
 
     /**
      * Display the specified project detail page.
      *
      * @param  string  $slug
      * @return \Illuminate\View\View
      */
     public function show($slug)
     {
         $allProjects = collect(config('projects.projects'));
         
         $project = $allProjects->where('slug', $slug)->first();
 
         if (!$project) {
             abort(404);
         }
 
         // Get other projects (random or latest)
         $otherProjects = $allProjects->where('slug', '!=', $slug)->take(3)->all();
 
         return view('pages.projects.show', compact('project', 'otherProjects'));
     }
 }
