const express = require('express');
const fetch = require('node-fetch');
const app = express();

app.use('/', async (req, res) => {
const url = 'http://192.168.1.100:5000' + req.url;
const options = {
  method: req.method,
  headers: {
      'Content-Type': 'application/json',
      // Add other headers as needed
  },
  body: req.method === 'POST' ? JSON.stringify(req.body) : undefined,
};

try {
  const response = await fetch(url, options);
  const data = await response.json();
  res.json(data);
} catch (error) {
  console.error('Error:', error);
  res.status(500).json({ error: 'Internal Server Error' });
}
});

const PORT = process.env.PORT || 3000;
app.listen(PORT, () => {
console.log(`Proxy server listening on port ${PORT}`);
});
