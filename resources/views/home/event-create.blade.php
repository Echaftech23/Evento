<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="bg-primary w-100 h-100 py-5">
    <div class="container bg-white" style="max-width: 70%; padding-inline: 0">
        <div class="form-header mx-auto" style="background: url({{asset('img/bg-form-.jpg')}}) bottom/cover; max-height:250px; height: 200px;"></div>
        <div class="form-body p-5">
            <form class="row g-3" action="{{ route('events.store') }}" method="POST" enctype="multipart/form-data">
                @csrf
                <div class="col-md-12">
                    <label for="inputPassword4" class="form-label">Event Title :</label>
                    <input type="text" name="title" value="{{old('title')}}" class="form-control @error('title') border-danger @enderror" id="inputPassword4" placeholder="Enter Event Title">
                    @error('title')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>


                <div class="col-md-4">
                    <label for="inputEmail4" class="form-label">Company Name :</label>
                    <input type="text" name="name" value="{{old('name')}}"  class="form-control @error('name') border-danger @enderror" id="inputEmail4" placeholder="Enter Company">
                    @error('name')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">City :</label>
                    <select id="inputState" name="city_id" class="form-select">
                        <option selected>Choose...</option>
                        @foreach ($cities as $city)
                        <option value="{{$city->id}}">{{$city->name}}</option>
                        @endforeach
                    </select>
                    @error('city_id')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Place :</label>
                    <input type="text" name="address" value="{{old('address')}}" class="form-control @error('address') border-danger @enderror" id="inputEmail4" placeholder="Event place">
                    @error('address')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror

                </div>



                <div class="col-md-4">
                    <label for="inputState" class="form-label">Start Date :</label>
                    <input type="date" name="startDate" class="form-control @error('startDate') border-danger @enderror" id="exampleFormControlInput1">
                    @error('startDate')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">End date :</label>
                    <input type="date" name="endDate" class="form-control @error('endDate') border-danger @enderror" id="exampleFormControlInput1">
                    @error('endDate')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputState" class="form-label">Reservation Deadline :</label>
                    <input type="date" name="registerEndDate" class="form-control @error('registerEndDate') border-danger @enderror" id="exampleFormControlInput1">
                    @error('registerEndDate')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="col-12">
                    <label for="exampleFormControlInput1" class="form-label">Event Image :</label>
                    <input type="file" name="event_image" class="form-control @error('event_image') border-danger @enderror" id="exampleFormControlInput1">
                    @error('event_image')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>



                <div class="col-md-4">
                    <label for="inputState" class="form-label">Event Category :</label>
                    <select id="inputState" name="category_id" class="form-select">
                        <option selected>Choose...</option>
                        @foreach ($categories as $category)
                            <option value="{{$category->id}}">{{$category->name}}</option>
                        @endforeach
                    </select>
                    @error('category_id')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Total Places :</label>
                    <input type="number" name="capacity" value="{{old('capacity')}}" class="form-control @error('capacity') border-danger @enderror" id="inputZip">
                    @error('capacity')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-md-4">
                    <label for="inputZip" class="form-label">Price :</label>
                    <input type="number" name="price" value="{{old('price')}}" class="form-control @error('price') border-danger @enderror" id="inputZip">
                    @error('price')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>

                <div class="col-12">
                    <label for="exampleFormControlTextarea1" class="form-label">Description :</label>
                    <textarea class="form-control" name="description" id="exampleFormControlTextarea1" rows="3" placeholder="Enter Event Description"></textarea>
                    @error('description')
                        <span class="text-sm text-danger">{{ $message }}</span>
                    @enderror
                </div>
                <div class="col-12">
                    <div class="form-check">
                    <input class="form-check-input" value="1" name="isAuto" type="checkbox" id="gridCheck">
                    <label class="form-check-label" for="gridCheck">
                        Auto Confirmation
                    </label>
                    </div>
                </div>
                <div class="col-12">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>

     <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
