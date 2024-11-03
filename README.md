# Laptop_WEB
Web page for my technical schools final project about laptops.

This website is designed to serve as a centralized platform for browsing and comparing laptops. Users can view detailed information on different laptop models, including specifications, images, and links to purchase options, catering to users interested in gaming, work, and study laptops. The website allows users to add laptops to a personalized "wish list" for easy reference, saving their preferred laptops for later review or purchase.


Laptop.sql

This SQL file defines a table named Laptop, containing detailed information about various laptops. Each record includes specifics such as:
Laptop_ID: Unique identifier for each laptop.
Modelis, Tips: Model and type of the laptop (e.g., Gaming, Work and Study).
Info: Brief description of the laptop.
Nosaukums, Ekrana_izmers, Ekrana_izskirtspeja: Name, screen size, and screen resolution.
Procesors, Procesora_kodoli, RAM, Videokarte, Video_kartes_atmina: Processor details, number of cores, RAM, graphics card, and video memory.
Kur_atrast, Kur_atrast_A: URLs to different sites for pricing and purchasing options.
Bilde, Bilde1, Bilde2: URLs for images of the laptop, providing multiple views.

The table is set up with an AUTO_INCREMENT on Laptop_ID, ensuring each entry has a unique identifier. This table serves as the core database for storing the main information on each laptop model.


wish_list.sql

This file defines a table named wish_list, which enables users to save laptops they are interested in. It includes:
id: Unique identifier for each wish list entry.
Laptop_ID: References the Laptop_ID from the Laptop table, establishing a relationship that links each wish list item back to a specific laptop entry.
This table enables users to manage a personalized selection of laptops, effectively creating a custom list based on their preferences for future reference.
