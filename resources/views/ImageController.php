public function store(Request $request)
{
    $request->validate([
        'image' => 'required|image|mimes:jpeg,png,jpg,gif|max:2048', // Adjust validation rules as needed
    ]);

    $image = $request->file('image');
    $imageName = time() . '.' . $image->getClientOriginalExtension();
    $image->move(public_path('uploads'), $imageName); // Upload to 'public/uploads' directory

    // You can also save the image path to a database if needed
    // Example: $imagePath = 'uploads/' . $imageName;

    return back()->with('success', 'Image uploaded successfully.');
}
