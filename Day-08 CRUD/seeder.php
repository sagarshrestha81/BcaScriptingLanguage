<?php

require_once "./server.php";
if($conn){
    $sql="INSERT INTO productss (product_name, product_price, product_stock, product_uid, product_detail, product_image, product_image_path, product_created_date, product_updated_date)
    VALUES
        ('Laptop Pro X', 1299.99, 50, 'UID123', 'Powerful laptop with high-performance specs.', '0x0123456789ABCDEF', '/images/laptop_pro_x.jpg', '2024-02-26', '2024-02-26'),
        ('Smartphone 12S', 899.99, 30, 'UID124', 'Latest smartphone with advanced camera features.', '0xFEDCBA9876543210', '/images/smartphone_12s.jpg', '2024-02-26', '2024-02-26'),
        ('Coffee Maker Deluxe', 149.99, 100, 'UID125', 'State-of-the-art coffee maker for coffee enthusiasts.', '0x0123456789ABCDEF', '/images/coffee_maker_deluxe.jpg', '2024-02-26', '2024-02-26'),
        ('4K Ultra HD TV', 1299.99, 20, 'UID126', 'Immersive entertainment with stunning 4K resolution.', '0xFEDCBA9876543210', '/images/4k_ultra_hd_tv.jpg', '2024-02-26', '2024-02-26'),
        ('Wireless Headphones Pro', 179.99, 75, 'UID127', 'Premium wireless headphones for an enhanced audio experience.', '0x0123456789ABCDEF', '/images/wireless_headphones_pro.jpg', '2024-02-26', '2024-02-26'),
        ('Gaming Console X1', 329.99, 15, 'UID128', 'Next-gen gaming console for ultimate gaming performance.', '0xFEDCBA9876543210', '/images/gaming_console_x1.jpg', '2024-02-26', '2024-02-26'),
        ('Digital Camera Elite', 699.99, 40, 'UID129', 'Professional-grade digital camera for photography enthusiasts.', '0x0123456789ABCDEF', '/images/digital_camera_elite.jpg', '2024-02-26', '2024-02-26'),
        ('Fitness Tracker Pro', 249.99, 60, 'UID130', 'Advanced fitness tracker to monitor your health and workouts.', '0xFEDCBA9876543210', '/images/fitness_tracker_pro.jpg', '2024-02-26', '2024-02-26'),
        ('Home Theater System', 499.99, 80, 'UID131', 'Complete home theater system for a cinematic experience at home.', '0x0123456789ABCDEF', '/images/home_theater_system.jpg', '2024-02-26', '2024-02-26'),
        ('Smart Watch Elite', 349.99, 25, 'UID132', 'Premium smartwatch with advanced features and elegant design.', '0xFEDCBA9876543210', '/images/smart_watch_elite.jpg', '2024-02-26', '2024-02-26')";
        
        if($conn->query($sql)){
            echo "Seeder data updated";
        }

}