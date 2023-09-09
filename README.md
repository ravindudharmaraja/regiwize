### Prerequisites

Before you begin, ensure you have met the following requirements:

- Node.js and npm installed
- Firebase project set up

### Installation

1. Clone the repository:

   git clone https://github.com/yourusername/your-repo.git

2. Change into the project directory:

    cd your-repo

3. Install the required dependencies:

    npm install
    


### Firebase Configuration

1. Modify the Firebase configuration credentials in the public/js/firebase.js file.

2. Replace the Firebase configuration object in public/js/firebase.js with your Firebase project's   configuration. You can find this configuration in your Firebase project settings.

    const firebaseConfig = {
        apiKey: "YOUR_API_KEY",
        authDomain: "YOUR_AUTH_DOMAIN",
        databaseURL: "YOUR_DATABASE_URL",
        projectId: "YOUR_PROJECT_ID",
        storageBucket: "YOUR_STORAGE_BUCKET",
        messagingSenderId: "YOUR_MESSAGING_SENDER_ID",
        appId: "YOUR_APP_ID",
        measurementId: "YOUR_MEASUREMENT_ID"
    };

3. Replace regiwize-6f0a9-firebase-adminsdk-kxhkv-6eccfe7ce2.json in the root directory with your Firebase service account's private key JSON file. You can generate this private key JSON file in your Firebase project settings.






