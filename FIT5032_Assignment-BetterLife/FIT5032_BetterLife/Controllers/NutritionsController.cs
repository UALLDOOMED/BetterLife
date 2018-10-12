using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using FIT5032_BetterLife.Models;
using Microsoft.AspNet.Identity;

namespace FIT5032_BetterLife.Controllers
{
    public class NutritionsController : Controller
    {
        private NutritionModel db = new NutritionModel();

        // GET: Nutritions
        public ActionResult Index()
        {
            return View(db.Nutritions.ToList());
        }

        public ActionResult VisitorIndex()
        {
            return View(db.Nutritions.ToList());
        }
        // GET: Nutritions/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Nutrition nutrition = db.Nutritions.Find(id);
            if (nutrition == null)
            {
                return HttpNotFound();
            }
            return View(nutrition);
        }

        // GET: Nutritions/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: Nutritions/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        [Authorize(Roles = "admin")]
        public ActionResult Create([Bind(Include = "Id,Name,Description")] Nutrition nutrition)
        {
            nutrition.UserId = User.Identity.GetUserId();
            ModelState.Clear();
            TryValidateModel(nutrition);
            if (ModelState.IsValid)
            {
                db.Nutritions.Add(nutrition);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(nutrition);
        }

        // GET: Nutritions/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Nutrition nutrition = db.Nutritions.Find(id);
            if (nutrition == null)
            {
                return HttpNotFound();
            }
            return View(nutrition);
        }

        // POST: Nutritions/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see https://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        [Authorize(Roles = "admin")]
        public ActionResult Edit([Bind(Include = "Id,Name,Description")] Nutrition nutrition)
        {
            nutrition.UserId = User.Identity.GetUserId();
            ModelState.Clear();
            TryValidateModel(nutrition);
            if (ModelState.IsValid)
            {
                db.Entry(nutrition).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(nutrition);
        }

        // GET: Nutritions/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            Nutrition nutrition = db.Nutritions.Find(id);
            if (nutrition == null)
            {
                return HttpNotFound();
            }
            return View(nutrition);
        }

        // POST: Nutritions/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        [Authorize(Roles = "admin")]
        public ActionResult DeleteConfirmed(int id)
        {
            Nutrition nutrition = db.Nutritions.Find(id);
            db.Nutritions.Remove(nutrition);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
