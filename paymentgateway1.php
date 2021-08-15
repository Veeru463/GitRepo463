JSONObject request = new JSONObject();
request.put("plan_id", "<plan_id>");
request.put("customer_notify", 1);
request.put("total_count", 6);
request.put("start_at", 1495995837);

JSONArray addons = new JSONArray();
JSONObject addon = new JSONObject();
JSONObject item = new JSONObject();
item.put("name", "Delivery charges");
item.put("amount", 30000);
item.put("currency", "INR");
addon.put("item", item);
addons.put(addon);
request.put("addons", addons);

Subscription subscription = razorpayClient.Subscriptions.create(request);

JSONObject lineItem = new JSONObject();
lineItem.put("amount", 100); // Note: The amount should be in paise.
lineItem.put("name", "name_invoice");

JSONArray lineItems = new JSONArray();
lineItems.put(lineItem);

JSONObject request = new JSONObject();
request.put("line_items", lineItems);
request.put("date", 1480768625); // Timestamp in seconds
request.put("currency", "INR");
request.put("sms_notify", "0");

Invoice invoice = razorpayClient.Invoices.create(request);
