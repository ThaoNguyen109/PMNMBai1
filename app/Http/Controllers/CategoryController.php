<?php

namespace App\Http\Controllers;
use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function index()
    {
        $categories = \App\Models\Category::all();
        return view('admin.category.index', ['categories' => $categories]);
    }
    public function create()
    {
        $categories = Category::where('is_delete', 0)->get();
        return view('admin.category.add', compact('categories'));
    }

    public function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $request->parent_id ?? null;
        $category->is_active = $request->is_active ?? 1;
        $category->save();

        return redirect('/admin/categories');
    }
    public function edit(string $id)
    {
        $category = Category::findOrFail($id);

        $categories = Category::where('id', '!=', $id)
            ->where('is_delete', 0)
            ->get();

        return view('admin.category.edit', compact('category', 'categories'));
    }

    public function update(Request $request, string $id)
    {
        $category = Category::findOrFail($id);

        $parentId = $request->parent_id;

        if ($this->wouldCreateCycle($parentId, $category)) {
            return back()
                ->withErrors(['parent_id' => 'Không thể chọn danh mục cha không hợp lệ'])
                ->withInput();
        }

        $category->name = $request->name;
        $category->description = $request->description;
        $category->parent_id = $parentId ?: null;
        $category->is_active = $request->is_active ?? 1;

        $category->save();

        return redirect('/admin/categories');
    }

    // xóa mềm
    public function destroy(string $id)
    {
        $category = Category::findOrFail($id);
        $category->is_delete = 1;
        $category->save(); 
        return redirect('/admin/categories');
    }
    private function wouldCreateCycle($parentId, $category)
    {
        if (!$parentId) return false;

        if ($parentId == $category->id) return true;

        $current = Category::find($parentId);

        while ($current) {
            if ($current->id == $category->id) {
                return true;
            }
            $current = $current->parent; // đi ngược lên cha
        }

        return false;
    }
}
