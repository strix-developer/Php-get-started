
const { MongoClient } = require('mongodb');

async function main() {
   /**
    * Connection URI. Update <username>, <password>, and <your-cluster-url> to reflect your cluster.
    * See https://docs.mongodb.com/ecosystem/drivers/node/ for more details
    */
   const uri = "mongodb+srv://<Himanshu>:<1234>@<himnshu>/test?retryWrites=true&w=majority";

   /**
    * The Mongo Client you will use to interact with your database
    * See https://mongodb.github.io/node-mongodb-native/3.6/api/MongoClient.html for more details
    * In case: MongoClient.connect(uri, function(err, client)) { ... }
    */
   const client = new MongoClient(uri, { useNewUrlParser: true, useUnifiedTopology: true });

   try {
      // Connect to the MongoDB cluster
      await client.connect();

      // Make the appropriate DB calls
      await listDatabases(client);

   } catch (e) {
      console.error(e);
   } finally {
      // Close connection to MongoDB
      await client.close();
   }
}

main().catch(console.error);