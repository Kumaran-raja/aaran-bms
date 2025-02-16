# BUSINESS MANAGEMENT SYSTEM

---

- [Platform Structure](#section-1)
- [Roles and Permissions](#section-2)

<a name="section-1"></a>

![structure](/images/docs/project/multi_vendor.png)

---

<larecipe-card >
    <larecipe-badge type="success" circle class="mr-3" icon="fa fa-wpforms"></larecipe-badge>
    <larecipe-progress type="success" :value="100"></larecipe-progress>
</larecipe-card>


<a name="section-2"></a>

---

# E-Commerce Website - Roles & Permissions

---

<h2 class="flex items-center m-2 p-2 ">
    <span style="color: #4A90E2; font-weight: bold; font-size: 1.5rem;">
        1.  User (Customer)
    </span>
</h2>




### **What Users Can Do (In Order):**

1. ✅ Customer can Register, Sign up and receive a welcome email.
2. ✅ Customer can browse products and search using the autocomplete feature.
3. ✅ Customer can save their favourite products to a wishlist for later purchase.
4. ✅ Customer can see their recently viewed products.
5. ✅ Customer can add products to their cart and proceed to checkout.
6. ✅ Customer can buy their favourite products with stripe payment.
7. ✅ Customer will get an email confirmation after a successful purchase.
8. ✅ Customer can track order status like Processing/Shipped/Delivered.
9. ✅ Customer can review purchased products.
10. ✅ Customer can share purchased product photos.
11. ✅ Customer can share their experience with the delivery man-rider.
12. ✅ Customer can edit their own profile and update their shipping address.
13. ✅ Customer can change their password.
14. ✅ Customer can see recent orders from their profile and search orders.
15. ✅ Customer can subscribe to and unsubscribe from the newsletter.
16. ✅ Customer can see blog posts and comment on them.
17. ✅ Customer can contact the authority for queries or support.
18. ✅ Customer can share products on social networks for indirect advertising.

### **What Users Cannot Do:**

- ❌ Edit or remove products from the store.
- ❌ Change product pricing.
- ❌ Access vendor or admin dashboards.
- ❌ Approve or reject vendor applications.
- ❌ Manage other users or vendors.
- ❌ Modify website policies or settings.

---

<h2 class="flex items-center m-2 p-2 ">
    <span style="color: #4A90E2; font-weight: bold; font-size: 1.5rem;">
        2. Vendor (Seller)
    </span>
</h2>

### **What Vendors Can Do:**

- ✅ Register as a vendor and set up a seller profile.
- ✅ List products with images, descriptions, and pricing.
- ✅ Manage inventory and update product availability.
- ✅ Process and manage orders.
- ✅ Set up shipping details and delivery options.
- ✅ Communicate with customers regarding their orders.
- ✅ Offer discounts and promotions on their products.
- ✅ View sales reports and earnings.
- ✅ Withdraw earnings as per platform policies.
- ✅ Receive and respond to product reviews.
- ✅ Product Stock Management.
- ✅ Vendor Order Email Notifications.
- ✅ Import/Export Product via CSV.
- ✅ Under development: Vendor can add Coupons for their store and can send newsletters to customers for advertising.

### **What Vendors Cannot Do:**

- ❌ Access or modify other vendors' products or details.
- ❌ Change website-wide settings.
- ❌ Approve or reject other vendors.
- ❌ Modify payment and transaction policies.
- ❌ Manage users or admin functionalities.

---

<h2 class="flex items-center m-2 p-2 ">
    <span style="color: #4A90E2; font-weight: bold; font-size: 1.5rem;">
        3. Admin (Website Owner/Manager)
    </span>
</h2>

### **What Admins Can Do:**

- ✅ Manage all users (approve, suspend, or delete accounts).
- ✅ Approve or reject vendor applications.
- ✅ Manage product categories and featured listings.
- ✅ Modify pricing rules and commission structures.
- ✅ Oversee orders and transactions.
- ✅ Handle refunds and disputes.
- ✅ Customize the website's appearance and settings.
- ✅ Monitor website analytics and reports.
- ✅ Send promotional emails and notifications.
- ✅ Implement and enforce security measures.
- ✅ Manage website policies and terms of service.
- ✅ View and manage vendor and customer lists.
- ✅ Advanced Settings for Admin:
    - ✅ Admin can manage new product status.
    - ✅ Admin can set the order status for withdrawal.
    - ✅ Admin can enable/disable the permission of review editing for the vendor.

### **What Admins Cannot Do:**

- ❌ Make unauthorized transactions on behalf of users or vendors.
- ❌ Share user or vendor data without consent.
- ❌ Modify customer reviews unfairly.

<larecipe-progress type="success" :value="100"></larecipe-progress>


Blog:
- Blog
    - title,slug,image,category.
- Tag
- Comments
- Category with filter
- blog pagination max 5
- Can view details of an blog
- Search with blog title,slug and category

Contact:
- User can send mail to the authority.
- Admin can see all contact information.
  <p><small>Note: Admin can't create,update,edit,delete  contact info from administration.</small></p>

Newsletter:
- Subscriber new customer
- User can also unsubscriber our newsletter.
- We have to send newsletter mail every week with new offer/ discusnt/ free shipping/ occasional offter
    <p><small>Note: Admin can't create,update,edit,delete  subscriber from administration.</small></p>      
    <p><small>Future developement:
        - Only authority can send newsletter from there administration.
      </small></p>


