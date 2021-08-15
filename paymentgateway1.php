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