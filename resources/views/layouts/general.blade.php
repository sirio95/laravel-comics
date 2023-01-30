<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>DC Comics</title>
    @vite('resources/js/app.js')
</head>
<body>
    <div class="container px-4">
        <div class="row thin_blue">
          <a href="#">DC POWERED</a>
        </div>
        <div class="row d-flex justify-content-between">
            <div class="h-50 w-50">
                <img src="{{ Vite::asset('/resources/imgs/favicon.ico') }}" alt="dc icon">
            </div>
            <ul class="d-flex justify-content-around gap-3 fs-4">
                <li>characters</li>
                <li class='selected'>comics</li>
                <li>movies</li>
                <li>tv</li>
                <li>games</li>
                <li>collectibles</li>
                <li>videos</li>
                <li>fans</li>
                <li>news</li>
                <li>shop <a href="#">&#8595;</a></li>
            </ul>
            <div class="input-group">
                <div class="form-outline">
                  <input id="search-focus" type="search" id="form1" class="form-control search_box" />
                  <label class="form-label" for="form1">Search</label>
                </div>
                <button type="button" class="btn btn-primary">
                  <i class="fas fa-search"></i>
                </button>
              </div>
        </div>
    </div>
</body>
</html>