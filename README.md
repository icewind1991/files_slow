# files_slow
Slow down storage backends in ownCloud for performance debugging

Adds a delay to every call made to the storages backends to emulate working with slow storage backends.

---

Since most developers only work with fast local storage backends
it's easy to add additional calls to the filesystem in the code
without realizing the performance impact this can have when a user is using a slower storage backend.

This app makes it easy to simulate working with slow storage backends
without having to go trough the effort of setting up an external storage backend.

Enabling the apps adds a 100ms (configurable in `appinfo/app.php`) delay to every call made to the storage backend
to make it noticiable when to many filesystem calls are being made in an app.
