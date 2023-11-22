<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Template;

class TemplateController extends Controller
{
    // CRIAR
    public function create()
    {
        return view('add');
    }

    public function store(Request $request)
    {
        $request->validate([
            'nm_template' => 'required',
            'template_image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:2048',
        ]);

        $imageName = time() . '.' . $request->template_image->extension();
        $request->template_image->move(public_path('template_images'), $imageName);

        Template::create([
            'nm_template' => $request->nm_template,
            'path_template' => 'template_images/' . $imageName,
        ]);

        return redirect('/templates');
    }

    // LISTA

    public function list()
    {
        $templates = Template::all();
        return view('list', compact('templates'));
    }

    // EDITAR

    public function edit(Template $template)
    {
        return view('edit', compact('template'));
    }

    public function update(Request $request, Template $template)
    {
        $request->validate([
            'nm_template' => 'required',
            'template_image' => 'image|mimes:jpeg,png,jpg,gif,svg|max:2048',
            // Add other validation rules as needed
        ]);

        if ($request->hasFile('template_image')) {
            $imageName = time() . '.' . $request->template_image->extension();
            $request->template_image->move(public_path('template_images'), $imageName);
            $template->path_template = 'template_images/' . $imageName;
        }

        $template->save();

       
        $template->update([
            'nm_template' => $request->nm_template,
            
        ]);

        return redirect('/templates')->with('success', 'Template atualizado com sucesso!');
    }

    // DELETAR

    public function destroy(Template $template)
    {
        //deletar do banco
        $template->delete();

        // deletar do projeto
        $filePath = public_path($template->path_template);
        if (file_exists($filePath)) {
            unlink($filePath);
        }

        return redirect('/templates');
    }
}