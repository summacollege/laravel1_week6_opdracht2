<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nieuwe huurauto</title>
</head>
<body>
    <form action="{{ route('store') }}" method="POST">
        @csrf
        <div class="form-group">
            <label for="autonummer">Auto nummer</label>
            <input type="text" id="autonummer" name="autonummer" placeholder="autonummer" value="{{ old('autonummer') }}">
            @error('autonummer')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="automerk">Auto merk</label>
            <input type="text" id="automerk" name="automerk" placeholder="automerk">
            @error('automerk')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="autotype">Auto type</label>
            <input type="text" id="autotype" name="autotype" placeholder="Auto model">
            @error('autotype')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div class="form-group">
            <label for="autobouwjaar">Auto bouwjaar</label>
            <input type="text" id="autobouwjaar" name="autobouwjaar" placeholder="Auto year">
            @error('autobouwjaar')
                <div>{{ $message }}</div>
            @enderror
        </div>
        <div>
            <button type="submit" >Opslaan</button>
        </div>
    </form>
</body>
</html>