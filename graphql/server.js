const { graphql, buildSchema } = require('graphql');

const {graphqlHTTP} = require('express-graphql');
const express =  require('express');

const app = express();

// Schema for specific graphql queries
const schema = buildSchema(`
  type Query {
    name: String,
    email: String
  }
`);


const root = {
  name: () => 'Lee',
  email: () => 'frank@gmail.com'
}

app.use('/graphql', graphqlHTTP({
  schema: schema,
  rootValue: root,
  graphiql: true
}));

console.log('Running a GraphQL API server at http://localhost:4000/graphql');
app.listen(4000);

// // Run the GraphQL query '{ hello }' and print out the response
// graphql(schema, "{email , name}", root).then((response) => {
//   console.log(response);
// });