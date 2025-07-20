export default async function handler(req, res) {
  if (req.method === "POST") {
    const { fullname, email, message } = req.body;
    console.log("Contact form submission:", { fullname, email, message });
    res.status(200).json({ success: true, message: "Message received!" });
  } else {
    res.status(405).json({ error: "Method not allowed" });
  }
}
