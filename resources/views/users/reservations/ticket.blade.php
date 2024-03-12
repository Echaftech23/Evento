<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Evento</title>
    <script src="https://cdn.tailwindcss.com" ></script>
    <style>
        .air-ticket-card {
            border: 1px solid #ccc;
            border-radius: 5px;
            padding: 15px;
            width: 600px;
            margin: 0 auto;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .classD {
            display: flex;
            justify-content: space-between;
            margin-bottom: 10px;
        }

        .classA {
            flex-basis: calc(33.33% - 10px);
            background-color: #ddd;
            padding: 5px;
            border-radius: 5px;
        }

        .classC {
            font-size: 0.9em;
        }

        .classB {
            display: block;
            margin-bottom: 10px;
            color: #f90a16;
            font-size: 20px;
            font-weight: bold;
        }
    </style>
</head>

<body>
    <div class="air-ticket-card" style="background: url('https://images.unsplash.com/photo-1507878866276-a947ef722fee?q=80&w=2071&auto=format&fit=crop&ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D'); background-size: cover;">
        <div class="classD">
            <span class="classA">N° : {{$reservation->id}}</span>
        </div>
        <div class="classC">
            <span class="classB">Event : {{$reservation->event->title}}</span>
            <span class="classB">Attendee Name : {{$reservation->user->name}}</span>
            <span class="classB">Event location: {{$reservation->event->city->name}}</span>
            <span class="classB">Event Date: {{$reservation->event->startDate}}</span>
            {{-- <span class="classB">Total price: {{$reservation->event->price * $eventUser->number_place}} MAD</span> --}}
        </div>
    </div>
</body>

</html>
