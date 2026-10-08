# IoT-Based Smart Greenhouse Management System

## Project Overview

The **IoT-Based Smart Greenhouse Management System** is an academic software engineering and Internet of Things (IoT) project designed to monitor greenhouse environmental conditions and support automated plant cultivation.

The system combines Arduino-based hardware, environmental sensors, actuators, internet connectivity and a web application to support greenhouse monitoring and management.

The project was developed as part of undergraduate Software Engineering studies associated with the University of Plymouth.

## Project Objectives

- Monitor environmental conditions within a greenhouse.
- Support automated irrigation, lighting and temperature regulation.
- Reduce the need for continuous manual greenhouse monitoring.
- Provide a web-based interface for greenhouse owners.
- Support communication between greenhouse owners and agricultural instructors.
- Store and present greenhouse information for monitoring and analysis.

## System Features

### 1. Environmental Monitoring

The system design incorporates sensors for monitoring:

- Temperature and humidity
- Soil moisture
- Light intensity
- Greenhouse water tank levels

### 2. Automated Greenhouse Control

The hardware design includes the following subsystems:

- Automated plant watering
- Automated lighting
- Temperature regulation using fans
- Automated water tank refilling

### 3. Web Application

The application design includes:

- User registration and authentication
- Greenhouse owner dashboard
- Agricultural instructor dashboard
- Sensor monitoring dashboard
- Greenhouse management functionality
- Environmental data visualisation
- Communication platform between greenhouse owners and instructors

**Note:** Some features are documented as planned or under development in the available project materials. Their implementation status should be verified against the original source code.

## Technology Stack

| Category | Technologies |
|---|---|
| IoT Hardware | Arduino Uno, Arduino Nano |
| Connectivity | ESP8266 Wi-Fi Module |
| Sensors | DHT11, Soil Moisture, LDR, Ultrasonic |
| Actuators | DC Fans, Water Pumps, LED Lights, Relay Modules |
| Frontend | Angular (documented in presentation) |
| Web Development | PHP (referenced in development notes) |
| Database | MySQL / MariaDB |
| Cloud Integration | ThingSpeak |
| Development Concepts | IoT, Embedded Systems, Web Applications, Database Management |

## System Architecture

The documented system follows a sensor-to-controller-to-application architecture.

1. Sensors collect environmental measurements.
2. Arduino microcontrollers process sensor readings.
3. Wi-Fi connectivity supports communication with internet services.
4. The application provides greenhouse monitoring functionality.
5. Actuators support environmental control based on system logic.

## Project Documentation

The repository contains the available academic and technical documentation:

- Original IoT coursework report
- Smart greenhouse system presentation
- MySQL/MariaDB database export
- Software development requirements

## Project Context

**Academic programme:** BSc (Hons) Software Engineering  
**Institution:** University of Plymouth  
**Project area:** Internet of Things and Smart Agriculture  
**Project type:** Academic group project with subsequent development materials

The 2019 coursework report identifies a five-member team, with Manesh Nimsara Samararathne as Team Lead.

## Skills Demonstrated

- Internet of Things (IoT)
- Requirements Analysis
- Software Engineering
- System Architecture
- UML and Data Flow Modelling
- Database Design
- Embedded Systems
- Sensor Integration
- Web Application Design
- Software Testing
- Technical Documentation
- Project Coordination

## Project Limitations

The available files document system design, hardware components, database structure and planned software features. The complete application source code and full operational status have not yet been verified.

## Future Improvements

Potential enhancements include:

- Real-time environmental analytics dashboards
- Cloud-based sensor data storage
- Automated alert notifications
- Predictive environmental monitoring
- Mobile-friendly greenhouse management
- Machine learning for irrigation optimisation

## Project Credits

This project originated from academic group work. Contributions and authorship should be acknowledged appropriately when publishing project materials.

## Disclaimer

This repository is intended for academic demonstration and professional portfolio purposes.
