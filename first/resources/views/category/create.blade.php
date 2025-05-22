<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Category Create</title>
</head>
<body>
  <h1>Category Create</h1>
  <form action="{{ route('category.store') }}" method="post">
    @csrf
    <label for="title">Title</label>
    <input type="text" name="title" placeholder="Enter title">
    <br>

    <label for="slug">Slug</label>
    <input type="text" name="slug" placeholder="Enter slug">
    <br>

    <label for="rank">Rank</label>
   <input type="number" name="rank" id="rank" placeholder="Enter rank">
    <br>

    <label for="image">Image</label>
    <input type="file" name="image" id="image">
    <br>

    <label for="description">Description</label>
    <textarea name="description" id="" cols="30" rows="10"></textarea>
    <br>

    <label>Status:</label>
    <input type="radio" id="active" name="status" value=1>
    <label for="active">Active</label>
    <input type="radio" id="inactive" name="status" value=0>
    <label for="inactive">Inactive</label>
    <br>

    <input type="submit" value="Save Category">
  </form>
</body>
</html>