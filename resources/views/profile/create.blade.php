<x-master title="Create Profile">
    <h3>
        Create New Profile:
    </h3>
    <div class="mb-3">
        <label class="form-label">Name:</label>
        <input type="text" name="name" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Email:</label>
        <input type="email" name="email" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label">Password:</label>
        <input type="password" name="password" class="form-control" required>
    </div>
    <div class="mb-3">
        <label class="form-label"> Bio: (optional)</label>
        <textarea name="bio" class="form-control" required></textarea>
    </div>
    <div class="d-grid my-2">
        <button type="submit" class="btn btn-primary btn-block">Create</button>
    </div>

</x-master>
