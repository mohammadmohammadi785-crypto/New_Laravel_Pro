<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    @vite("resources/css/app.css")
</head>
<body>
    <div class="bg-black text-white p-5 w-full min-h-screen">
        <div class="max-w-6xl w-full flex flex-col gap-1.5 mx-auto">
            @if (count($data)>0)
                @foreach ($data as $d)
                    <div class="border px-6 py-4 rounded-md">
                        <h1>{{ $d->name }}</h1>
                        <span class="text-sm">{{ $d->email }}</span>
                        <div class="border rounded-md p-4 text-stone-100">
                            <h1>Phone Information</h1>
                            <p>Model: {{ $d->phone->model }}</p>
                            <p>Price: {{ $d->phone->price }}</p>
                        </div>
                    </div>
                @endforeach
            @endif
        </div>
        <div class="flex w-full gap-1.5 my-3">
            {{ $data->links() }}
        </div>
    </div>
</body>
</html>