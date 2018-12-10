# medsys
Electronic Medical Information System (EMIS)

FUNCTIONAL:
- LOGIN
- LOGOUT
           - All users can logout, pressing browser back button will not display session data for previously logged in user
- PATIENTS
           - login, error trapping
           - register a new user
                     - error trapping; 
                     - update database dynamically
                     - account not "validated" until RECEPTIONIST approves account creation
           - Dashboard displays information pulled from Database
                     - personal info (editable)
                     - Insurance info (editable) --- if empty, displays a warning  
                     - Validated Appointments --- those not confirmed by RECEPTIONIST don't display
                     - New appointment --- submits a request to RECEPTIONIST for confirm/deny
                     - Chart --- not editable within the GUI by DOCTOR, but can display information from the Database
- RECEPTIONIST
             - View all registered patients, search list
             - View a "Patient Card" which display data about a specific patient, for each registered/unregistered patient
             - Confirm/deny Registration requests from new users
             - Confirm/deny Appointment requests from registered users
- NURSE
             - View searchable list of all Patients registered to the logged-in NURSE'S DOCTOR
- DOCTOR
             - View searchable list of all Patients registered to the logged-in DOCTOR
------------------------------------------------------------------------------------------------------------
Non-functional components:

- INBOX
          - Only GUI components present in PATIENT and DOCTOR dashboard (no functionality)
                        - DOCTOR dashboard can summon a reply box, but does not actually do anything
- SCHEDULE
           - Only GUI components present in RECEPTIONIST, DOCTOR, PATIENT, NURSE dashboards
                         - Schedule GUI can switch between two views but not functional
