# **MySPBU**

**Interactive Web Application for SPBU Mapping and Information**

![image](https://github.com/user-attachments/assets/ebaa4790-a280-4f05-a305-caf21c261b8f)

## **Overview**

**MySPBU** is a modern, web-based mapping application designed to provide users with detailed and interactive information about gas stations (SPBU) in a given area. Leveraging the power of **QGIS** and **Leaflet.js**, the application delivers accurate geographical data with a user-friendly interface, enabling seamless navigation and exploration.

## **Features**

- **Interactive Map**: Displays SPBU locations with custom markers and pop-ups.
- **Detailed Information**: Provides essential details, including:
  - **SPBU Code**: Unique identifier for each station.
  - **Address**: Full location for user convenience.
  - **Operating Hours**: Open and close times.
  - **Fuel Tank Capacity**: Information on tanks for motorcycles and cars.
  - **Facilities**: Additional services like restrooms, minimarkets, etc.
  - **Operational Status**: Indicates whether the station is active.
  - **Photo**: Displays SPBU images for easy identification.
- **Dynamic Pop-Ups**: Displays SPBU details in a clean, styled pop-up with responsive design.
- **Customizable Icons**: Uses visually distinct icons to differentiate locations.

## **Tech Stack**

The following technologies were used to build MySPBU:

### **Frontend**

- **HTML5, CSS3, JavaScript**: Core web development stack for UI/UX.
- **Leaflet.js**: For interactive map rendering and geospatial visualization.

### **Backend**

- **PHP**: Backend scripting for dynamic data handling.
- **Laravel**: Framework for managing server-side logic and API integration.

### **Geospatial Data**

- **QGIS**: To manage, edit, and export geospatial data in GeoJSON format.
- **GeoJSON**: Used to store and exchange geospatial data.

### **Assets**

- **Images and Icons**: Stored locally for SPBU photos and custom markers.

## **Setup and Installation**

Follow these steps to run the project locally:

### **Prerequisites**

1. Install PHP (>=7.4) and Composer.
2. Set up a local server environment (e.g., XAMPP, WAMP).
3. Clone the repository:
   ```bash
   git clone https://github.com/yourusername/myspbu.git
   cd myspbu
   ```

## **Configuration**

1. Place SPBU images in the `assets/foto_spbu/` directory. Ensure filenames match the `foto_spbu` property in the GeoJSON file.
2. Update `spbu.geojson` in the `assets/` directory with your geospatial data.

## **Run Locally**

1. Start your local server and point it to the project directory.
2. Access the app in your browser at `http://localhost/myspbu`.

## **Usage**

1. Open the interactive map to view SPBU locations.
2. Click on markers to see detailed information, including operational hours, facilities, and photos.
3. Use the dynamic pop-ups to explore SPBU services in a visually engaging layout.

## **Contributions**

Contributions are welcome! Feel free to fork the project and submit a pull request for improvements or additional features.

### **To Contribute**

1. Fork the repository.
2. Create a new branch:
   ```bash
   git checkout -b feature/new-feature
   ```
3. Commit your changes:
   ```bash
   git commit -m "Add new feature"
   ```
4. Push to the branch:
   ```bash
   git push origin feature/new-feature
   ```
5. Submit a pull request.

## **License**

This project is licensed under the MIT License.

## **Contact**

For any inquiries or feedback, feel free to reach out:

- Email: [Email Me](bayuwcksn01@gmail.com)
- LinkedIn: [Bayu Wicaksono](https://www.linkedin.com/in/bayuwicaksono14/)
- GitHub: [@baywcksn](https://github.com/baywcksn)
