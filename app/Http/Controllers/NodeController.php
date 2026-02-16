<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Node;

class NodeController extends Controller
{
    // Метод для отображения формы создания ноды
    public function create()
    {
        return view('nodes.create');
    }

    // Метод для сохранения новой ноды
    public function store(Request $request)
    {
        $validated = $request->validate([
            'author_bio' => 'required|string|max:255',
            'related_link' => 'required|url|max:255',
        ]);

        $xfields = [
            'author_bio' => $validated['author_bio'],
            'related_link' => $validated['related_link'],
        ];

        $xfieldsString = collect($xfields)->map(function ($value, $key) {
            return "{$key}|{$value}";
        })->implode('||');

        Node::create(['xfields' => $xfieldsString]);

        return redirect()->route('nodes.create')->with('status', 'Node created successfully!');
    }
}
