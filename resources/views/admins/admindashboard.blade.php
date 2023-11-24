<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin | Dashbord</title>
</head>
<body>

    <!-- Create Modal HTML -->
        <div class="modal-dialog">
            <div class="modal-content">
                <form method="POST" action="#">
                    @csrf
                    @method('PUT')
                    <div class="modal-header">
                        <h4 class="modal-title">Edit Room features</h4>
                        <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                    </div>
                    <div class="modal-body">
                        <div class="form-group">
                            <label>Hotel name</label>
                            <input type="text" class="form-control" name="hotel_name"  required>
                        </div>
                        <div class="form-group">
                            <label>Description</label>
                            <input type="text" class="form-control" name="description"  required>
                        </div>
                        <div class="form-group">
                            <label>Room name</label>
                            <input type="text" class="form-control" name="room_name"  required>
                        </div>
                        <div class="form-group">
                            <label>Price</label>
                            <input type="number" class="form-control" name="price"  required>
                        </div>
                        <div class="form-group">
                            <label>Bed numbers</label>
                            <input type="number" class="form-control" name="bed_numbers" required>
                        </div>
                        <div class="form-group">
                            <label>Adult max</label>
                            <input type="number" class="form-control" name="adult_max"  required>
                        </div>
                        <div class="form-group">
                            <label>Kid max</label>
                            <input type="number" class="form-control" name="kid_max" required>
                        </div>
                        <div class="form-group">
                            <label>Features</label>
                            <input type="number" class="form-control" name="features"  required>
                        </div>
                        <div class="form-group">
                            <label>Status</label>
                            <select class="form-control" name="status" required>
                                <option value="1" >Disponible</option>
                                <option value="0" >Non disponible</option>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
                        <button type="submit" class="btn btn-info">Save</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
