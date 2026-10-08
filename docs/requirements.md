# IoT-Based Smart Greenhouse Management System
## Software Requirements Specification (SRS)

**Project Type:** Academic IoT and Software Engineering Project  
**Institution:** University of Plymouth  
**Project Domain:** Smart Agriculture / Internet of Things  
**Document Type:** Software Requirements Specification  
**Development Period:** 2019–2020 (based on available documentation)

---

## 1. Introduction

### 1.1 Purpose

The purpose of this document is to define the functional, non-functional, hardware, software and interface requirements of the IoT-Based Smart Greenhouse Management System.

The system is designed to monitor environmental conditions within a greenhouse and support automated control of irrigation, lighting, temperature and water tank levels.

A web-based application provides an interface through which greenhouse owners can monitor conditions and manage greenhouse operations.

### 1.2 Problem Statement

Traditional greenhouse management requires regular manual monitoring of environmental conditions such as temperature, humidity, soil moisture and light intensity.

Manual monitoring can be time-consuming and may delay responses to environmental changes.

The proposed system aims to address these challenges through IoT-enabled monitoring, automated environmental control and web-based information access.

### 1.3 Project Objectives

- Monitor greenhouse environmental conditions using sensors.
- Support automatic irrigation based on soil moisture.
- Regulate greenhouse temperature using ventilation fans.
- Control artificial lighting according to environmental light conditions.
- Monitor and manage greenhouse water tank levels.
- Provide greenhouse monitoring through a web application.
- Maintain environmental records for reporting and analysis.
- Facilitate communication between greenhouse owners and agricultural instructors.

### 1.4 Project Scope

The system comprises two major components:

**Hardware System**

Arduino-based microcontrollers, environmental sensors, actuators, relay modules and communication modules.

**Software System**

A web-based application supporting user management, greenhouse monitoring, data visualisation and communication.

The original project documentation also describes integration with cloud services and database storage.

---

## 2. Stakeholders and User Roles

### 2.1 Greenhouse Owner

The greenhouse owner is the primary system user.

Responsibilities and expected capabilities include:

- Registering and accessing a user account.
- Monitoring greenhouse environmental conditions.
- Viewing greenhouse sensor information.
- Managing greenhouse details.
- Reviewing environmental reports and alerts.
- Communicating with agricultural instructors.
- Accessing available environmental control functions.

### 2.2 Agricultural Instructor

Agricultural instructors provide support and guidance to greenhouse owners.

The development requirements describe the following intended capabilities:

- Registering as an agricultural instructor.
- Viewing greenhouse owners within the same district.
- Communicating with greenhouse owners.
- Accessing greenhouse monitoring information with owner authorisation.
- Reviewing greenhouse reports.

**Implementation note:** The instructor access and messaging functionality is described in the development notes. Its completed implementation has not been verified.

---

## 3. Functional Requirements

### FR-01: User Registration

The system shall support registration of different user categories.

**Greenhouse Owner Registration**

- Username and account credentials.
- District.
- Greenhouse type.

The documented greenhouse type options are:

1. Shade houses
2. Screen houses
3. Crop top structures

**Agricultural Instructor Registration**

- Username and account credentials.
- District.
- Instructor ID.

### FR-02: User Authentication

The application shall provide user authentication to control access to greenhouse management functions.

The development notes additionally request automatic logout when a browser session is closed.

### FR-03: Environmental Temperature Monitoring

The system shall collect greenhouse temperature measurements using an environmental sensor.

Temperature measurements shall be available for greenhouse monitoring and environmental control.

### FR-04: Humidity Monitoring

The system shall monitor humidity levels within the greenhouse.

The documented hardware uses the DHT11 temperature and humidity sensor.

### FR-05: Soil Moisture Monitoring

The system shall measure soil moisture conditions using a soil moisture sensor.

Measurements shall support decisions related to plant irrigation.

### FR-06: Light Intensity Monitoring

The system shall monitor environmental light conditions using an LDR sensor.

Sensor readings shall support the automated lighting subsystem.

### FR-07: Water Tank Level Monitoring

The system shall monitor greenhouse water tank levels using an ultrasonic sensor.

Water level measurements shall support automated tank management.

### FR-08: Automated Irrigation

The system shall support automated plant watering using soil moisture measurements and water pump actuators.

### FR-09: Automated Temperature Regulation

The system shall support greenhouse temperature regulation using DC ventilation fans.

### FR-10: Automated Lighting

The system shall support artificial lighting when environmental light conditions require additional illumination.

### FR-11: Automated Water Tank Filling

The system shall support automatic water tank refilling through the documented water pump subsystem.

### FR-12: Greenhouse Monitoring Dashboard

The web application shall provide greenhouse owners with an interface for viewing environmental monitoring information.

The documented application design includes:

- Sensor data dashboard.
- Greenhouse owner dashboard.
- Greenhouse management functionality.
- Environmental data analysis dashboard.

### FR-13: Environmental Alerts and Reports

The application shall support the presentation of environmental alerts and monitoring reports.

The original requirements include warning information and reports based on environmental conditions.

**Implementation note:** The development notes identify the alert log and reports functionality as unfinished at that stage.

### FR-14: Communication Platform

The application shall support communication between greenhouse owners and agricultural instructors.

The proposed communication features include:

- District-based user discovery.
- Text messaging.
- Image sharing.
- Document sharing.
- Unread message indicators.

### FR-15: Agricultural Instructor Access

The proposed system shall allow agricultural instructors to request access to greenhouse monitoring information.

The development notes specify that:

- Access is initiated using greenhouse owner credentials or authorisation information.
- The greenhouse owner receives an access notification.
- Access is intended to end when the greenhouse owner closes the browser.

**Status:** Documented development requirement; implementation not confirmed.

---

## 4. Non-Functional Requirements

### NFR-01: Performance

The system should retrieve, process and display sensor readings with minimal delay.

Environmental monitoring information should be presented promptly enough to support greenhouse management.

### NFR-02: Reliability

The system should operate consistently during normal greenhouse monitoring activities.

### NFR-03: Availability

The web application should be accessible when the required network connection and supporting services are available.

### NFR-04: Usability

The user interface should be understandable and accessible to greenhouse owners, including users with limited technical experience.

### NFR-05: Security

The system should protect user account information and greenhouse monitoring data.

Access to restricted greenhouse information should be controlled through appropriate authentication and authorisation.

### NFR-06: Maintainability

The system should support maintenance of hardware components, application functions and supporting database services.

### NFR-07: Data Integrity

Sensor information and stored application data should remain accurate and consistent during processing and retrieval.

### NFR-08: Safety

Hardware components should be installed and maintained with suitable electrical protection and safeguards against environmental interference.

---

## 5. Hardware Requirements

| Component | Purpose |
|---|---|
| Arduino Uno / Nano | Sensor processing and hardware control |
| DHT11 Sensor | Temperature and humidity monitoring |
| Soil Moisture Sensor | Soil moisture measurement |
| LDR Sensor | Environmental light detection |
| Ultrasonic Sensor | Water tank level measurement |
| ESP8266 Wi-Fi Module | Network connectivity |
| DC Brushless Fans | Temperature regulation |
| Water Pumps | Irrigation and tank filling |
| LED Lights | Artificial lighting |
| Relay Module | Actuator switching |
| LCD Display | Local information display |
| Power Supply | Electrical power for system components |

The hardware list reflects the components described across the available report and presentation.

---

## 6. Software Requirements

| Technology | Documented Role |
|---|---|
| Arduino Programming Environment | Microcontroller development |
| Angular | Web application frontend described in the presentation |
| PHP | Server-side pages referenced in development notes |
| MySQL / MariaDB | Application database |
| phpMyAdmin | Database administration |
| ThingSpeak | IoT data communication and monitoring |
| HTML / CSS / Bootstrap | Web interface technologies referenced or implied by development notes |

**Note:** The supplied materials describe technologies from different development stages. The exact final software architecture requires confirmation from the original source code.

---

## 7. Database Requirements

The database is intended to support user management and greenhouse application information.

### 7.1 Available Database Schema

The supplied SQL export contains a database named `greenhouse` with a `users` table.

The documented table includes:

| Column | Data Type | Description |
|---|---|---|
| id | Integer | User record identifier |
| username | VARCHAR(50) | Username |
| username2 | VARCHAR(50) | Additional username field |
| password | VARCHAR(255) | Password hash |
| created_at | DATETIME | Record creation timestamp |
| StudentID | Integer | Additional identifier |
| Email | VARCHAR(30) | Email address |
| room | VARCHAR(20) | Additional stored field |

The original export does not provide sufficient evidence to establish the full database schema for sensor readings, greenhouse profiles, reports or messaging.

### 7.2 Additional Data Requirements

The application design implies a need to manage:

- Greenhouse details.
- Sensor readings.
- Environmental monitoring history.
- User communication records.
- Alerts and reports.
- Agricultural instructor information.

These are requirements identified from the project design, not confirmed tables in the supplied database export.

---

## 8. External Interface Requirements

### 8.1 Hardware Interfaces

Environmental sensors shall communicate with Arduino microcontrollers through the appropriate hardware interfaces.

Microcontrollers shall support communication with actuators responsible for greenhouse control.

### 8.2 Network Interfaces

The system design uses the ESP8266 Wi-Fi module for internet connectivity.

The original report describes communication with ThingSpeak for sensor information exchange.

### 8.3 User Interfaces

The documented web application includes interfaces for:

- User registration.
- User login.
- Greenhouse owner dashboard.
- Agricultural instructor dashboard.
- Sensor monitoring.
- Greenhouse management.
- Environmental reports.
- User communication.

---

## 9. System Constraints and Dependencies

The project documentation identifies the following constraints:

- Dependence on operational hardware components.
- Dependence on Wi-Fi and network connectivity for online functionality.
- Potential wireless communication limitations.
- Sensor accuracy and hardware integration considerations.
- Installation and maintenance costs.
- Dependence on available server and database services.

---

## 10. Testing Requirements

The original coursework report includes a system testing chapter and sensor test cases.

Testing should cover the following areas:

| Test Area | Expected Verification |
|---|---|
| Temperature Sensor | Sensor provides temperature readings |
| Humidity Sensor | Sensor provides humidity readings |
| Soil Moisture Sensor | Sensor detects soil moisture conditions |
| Light Sensor | Sensor responds to light changes |
| Ultrasonic Sensor | Sensor measures tank water level |
| Wi-Fi Connectivity | Hardware communicates with network services |
| Irrigation Control | Pump responds to control conditions |
| Temperature Control | Fans respond to control conditions |
| Lighting Control | Lights respond to control conditions |
| User Authentication | Access is restricted to authenticated users |
| Dashboard | Available environmental information is displayed |
| Database | Supported application records can be stored and retrieved |

This table represents a consolidated testing checklist. It does not claim that every test has been executed or passed.

---

## 11. Future Enhancements

The following enhancements could be considered for future development:

- Predictive irrigation using machine learning.
- Cloud-based environmental data analytics.
- Mobile application integration.
- Improved environmental alert notifications.
- Advanced greenhouse performance dashboards.
- Historical trend analysis.
- Predictive maintenance for greenhouse equipment.
- Enhanced role-based access control.

These are proposed enhancements rather than verified features of the original implementation.

---

## 12. Documentation and Implementation Status

This requirements specification consolidates information from the available project materials:

1. **PUSL2008 IoT Coursework Report (2019)** — Project objectives, architecture, hardware, software requirements and testing.
2. **IoT-Based Smart Greenhouse Management System Presentation (2020)** — Hardware subsystems, application features and technology overview.
3. **Read me_Green.txt** — Detailed software development requests and planned application functionality.
4. **greenhouse.sql** — Available MariaDB/MySQL database structure.

### Important Distinction

The project materials contain a combination of:

- Proposed system requirements.
- System design documentation.
- Hardware implementation descriptions.
- Software development instructions.
- Partial database implementation.

Not all documented features have been independently verified as complete.

---

## 13. Project Credits

This project originated as academic group coursework at the University of Plymouth.

The 2019 report identifies Manesh Nimsara Samararathne as Team Lead alongside four other group members.

Original team contributions should be acknowledged when publishing project materials.

---

**Document Status:** Consolidated requirements specification based on historical project documentation.
