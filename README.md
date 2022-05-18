# searchimg = searchduplicateimages
To find and compare image hashes, a simple, but at the same time very cool ImageHash class was 
used https://github.com/MihanEntalpo/php_helpers/tree/master/imagehash thanks for the repository provided

A multi-loader of images that points to duplicates when loading
Main functions:
1. Uploading images to the server / Multiloading images
2. Creating image hashes, as well as adding to the database for comparison
3. When adding new images, it indicates their duplicates (Images may differ: contrast, brightness, etc.) the percentage of compliance is 70%

P.S You need to create an image_hash database, then create a table with the name hash, create 2 columns image_name, image_hash in it
